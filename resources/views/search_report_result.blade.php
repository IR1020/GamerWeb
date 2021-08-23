<!DOCTYPE html>
<html lang="ja">

@extends('layouts.views_index')

@section('head')
<x-head title="記事検索結果" css="search_report_result" />
@endsection

@section('content')
<div class="container">
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

<div class="d-flex justify-content-center pagination">
    {{$datas->links()}}
</div>
@endsection