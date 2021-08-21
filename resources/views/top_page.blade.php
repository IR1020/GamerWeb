@extends('layouts.views_index')

@section('head')
<x-head title="トップページ" css="top_page" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="box-1 col-md-4 offset-md-2">
            <h1 class="description-title">
                GamerWebとは？
            </h1>
            <p class="description-content">
                GamerWebは、ゲーム知識を他者と共有するアプリです。
                ユーザー登録を行い、記事を投稿してみましょう！
            </p>
            <a type="button" class="btn btn-primary rounded-pill" href="{{url('/sign_up')}}">
                今すぐユーザー登録を行う
            </a>
        </div>

        <div class="box-2 col-md-4 offset-md-1">
            <img class="description-service-image" src="{{asset('../public/img/service_image_1.png')}}" alt="service_image_1">
        </div>
    </div>
</div>
@endsection