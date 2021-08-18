@extends('layouts.views_index')

@section('head')
<x-views-head title="ユーザーページ" css="user_page" />
@endsection

@section('content')
<x-header />

<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="container">
                <div class="row">
                    <p class="card-header text-center rounded-pill">
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
                    <p class="card-header text-center">
                        新着記事
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