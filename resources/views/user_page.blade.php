@extends('layouts.views_index')

@section('head')
<x-views-head title="ユーザーページ" css="user_page" />
@endsection

@section('content')
<h1>
    <br>
    {{$user_name}}
</h1>

<h2>
    ID:{{$user_id}}
</h2>

@if($flag==true)
<a href="{{url('/logout')}}">
    ログアウト
</a><br><br>

<a href="{{url('/write_report')}}">
    記事を投稿する
</a><br><br>

<a>
    投稿記事一覧
</a><br><br>

<a href="{{url('/delete_user/'.$user_id)}}">
    退会する
</a>
@endif

@endsection