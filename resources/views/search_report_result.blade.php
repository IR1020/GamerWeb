<!DOCTYPE html>
<html lang="ja">

@extends('layouts.views_index')

@section('head')
<x-head title="記事検索結果" css="search_report_result" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach($search_results as $search_result)
        <div class="col-md-10 offset-md-1 card-body border">
            <div class="container">
                <div class="row">
                    <a class="text-secondary text-decoration-none col-lg-8" href="{{url('/user_page/'.$search_result->user->id)}}">
                        <i class="fas fa-user-circle fa-fw"></i>
                        {{$search_result->user->name}}
                    </a>
                    <p class="col-lg-4">
                        投稿日：{{$search_result->created_at->format('Y年m月d日')}}
                    </p>
                    <a class="fw-bold text-secondary text-decoration-none" href="{{ url('/view_report/'.$search_result->id) }}">
                        {{$search_result->title}}
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-center pagination">
    {{$search_results->links()}}
</div>
@endsection