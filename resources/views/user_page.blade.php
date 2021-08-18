@extends('layouts.views_index')

@section('head')
<x-views-head title="ユーザーページ" css="user_page" />
@endsection

@section('content')
<x-header />

<h1>
    <br>
    {{$user_name}}
</h1>

<h2>
    ID:{{$user_id}}
</h2>

@if($flag==true)

@endif

@endsection