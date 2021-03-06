@extends('layouts.views_index')

@section('head')
<x-head title="記事投稿" css="write_and_edit_report" />
@endsection

@section('content')
@foreach ($errors->all() as $error)
<li>
    {{$error}}
</li>
@endforeach

<form class="col-md-8 offset-md-2 col-10 offset-1" action="{{url('/write_report')}}" method="post">
    @csrf
    <input type="text" name="report_title" class="form-control" placeholder="タイトル">

    <textarea name="report_content" class="form-control mt-3" rows="15" cols="80" placeholder="記事本文"></textarea>

    <button class="w-25 btn btn-primary mt-3" type="submit">投稿</button>
</form>
@endsection('content')