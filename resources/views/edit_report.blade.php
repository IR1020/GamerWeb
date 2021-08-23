@extends('layouts.views_index')

@section('head')
<x-head title="記事編集" css="write_and_edit_report" />
@endsection

@section('content')
@foreach ($errors->all() as $error)
<li>
    {{$error}}
</li>
@endforeach

@foreach($datas as $report)
<form class="col-md-8 offset-md-2 col-10 offset-1" action="{{url('/edit_report/'.$report->id)}}" method="post">
    @csrf
    <input type="text" name="report_title" class="form-control" value="{{$report->title}}" placeholder="タイトル">
    
    <textarea name="report_content" class="form-control mt-3" rows="15" cols="80" placeholder="記事本文">{{$report->content}}</textarea>

    <button class="w-25 btn btn-primary mt-3" type="submit">編集</button>
</form>
@endforeach
@endsection('content')