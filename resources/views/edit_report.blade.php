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
<form action="{{url('/edit_report/'.$report->id)}}" method="post">
    @csrf
    <input type="text" name="report_title" class="form-control" value="{{$report->title}}" placeholder="タイトル">

    <br>
    
    <textarea name="report_content" class="form-control" rows="15" cols="80" placeholder="記事本文">{{$report->content}}</textarea>

    <br>

    <button class="w-25 btn btn-primary" type="submit">編集</button>
</form>
@endforeach
@endsection