@extends('layouts.views_index')

@section('head')
<x-views-head title="トップページ" css="top_page" />
@endsection

@section('content')
<div class="DescriptionElements">
    <div class="DescriptionTextElements">
        <h1 class="DescriptionTitle">GamerWebとは？</h1>
        <p class="DescriptionContent">
            GamerWebは、ゲーム知識を他者と共有するアプリです。
            <br>
            ユーザー登録を行い、記事を投稿してみましょう！
        </p>
        <a href="{{url('/sign_up')}}" class="btn">今すぐユーザー登録を行う</a>
    </div>

    <img class="DescriptionServiceImage" src="{{asset('../public/img/service_image_1.png')}}" alt="service_image_1">
</div>
@endsection