@extends('layouts.views_index')

@section('head')
<x-head title="記事投稿" css="write_report" />
@endsection

@section('content')
@foreach ($errors->all() as $error)
<li>
    {{$error}}
</li>
@endforeach

<form action="{{url('/write_report')}}" method="post">
    @csrf
    <input type="text" name="report_title" placeholder="タイトル">

    <textarea name="report_content" rows="10" cols="70" placeholder="記事本文"></textarea>

    <button class="w-100 btn btn-lg btn-primary" type="submit">投稿</button>
</form>
@endsection