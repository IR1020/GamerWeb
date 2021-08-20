@extends('layouts.views_index')

@section('head')
<x-head title="ユーザーページ" css="user_page" />
@endsection

@section('content')
<x-header />

<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="container">
                <div class="row">
                    <p class="card-header text-center blue-gradation">
                        <i class="fas fa-user-circle fa-fw fa-lg"></i>
                        @foreach($datas as $user)
                        {{$user->name}}
                        @endforeach
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-7 offset-md-1">
            <div class="container">
                <div class="row">
                    <p class="card-header text-center blue-gradation">
                    <i class="fas fa-pencil-alt fa-fw fa-lg"></i>
                        投稿記事
                    </p>
                    @foreach($datas as $user)
                    @foreach($user->reports as $report)
                    <div class="card-body border">
                        <a href="{{ url('/view_report/'.$report->id) }}">
                            {{$report->title}}
                        </a>
                    </div>
                    @endforeach
                    @endforeach
                </div>
                <br>
            </div>
        </div>
    </div>

    @if($flag==true)

    @endif

    @endsection