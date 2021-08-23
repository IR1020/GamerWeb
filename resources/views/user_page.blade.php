@extends('layouts.views_index')

@section('head')
<x-head title="ユーザーページ" css="user_page" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="container">
                <div class="row">
                    <p class="card-header text-center blue-gradation">
                        <i class="fas fa-user-circle fa-fw fa-lg"></i>
                        {{$user_name}}
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="container">
                <div class="row">
                    <p class="card-header text-center blue-gradation">
                        <i class="fas fa-pencil-alt fa-fw fa-lg"></i>
                        投稿記事
                    </p>
                    @foreach($datas as $report)
                    <div class="card-body border">
                        <a class="fw-bold text-reset text-decoration-none" href="{{ url('/view_report/'.$report->id) }}">
                            {{$report->title}}
                        </a>
                    </div>
                    @endforeach
                </div><br>
                <div class="d-flex justify-content-center pagination">
                    {{$datas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@if($flag==true)

@endif

@endsection