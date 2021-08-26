@extends('layouts.views_index')

@section('head')
<x-head title="トップページ" css="top_page" />
@endsection

@section('content')
<div class="blue-gradation">
    <div class="box1 container">
        <div class="row">
            <div class="box">
                <h1 class="h2 text-light description-title">
                make a game media!
                </h1>
                <p class="text-light description-content mb-4">
                    GamerWebは、ゲーム情報を発信するアプリです。
                    ユーザー登録を行い、記事を投稿してみましょう！
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        @foreach($datas as $report)
        <div class="card-body border">
            <div class="container">
                <div class="row">
                    <a class="text-secondary text-decoration-none col-lg-8" href="{{url('/user_page/'.$report->user->id)}}">
                        <i class="fas fa-user-circle fa-fw"></i>
                        {{$report->user->name}}
                    </a>
                    <p class="col-lg-4">
                        投稿日：{{$report->created_at->format('Y年m月d日')}}
                    </p>
                    <a class="fw-bold text-secondary text-decoration-none" href="{{ url('/view_report/'.$report->id) }}">
                        {{$report->title}}
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-center pagination mt-3">
    {{$datas->links()}}
</div>

@endsection