<!DOCTYPE html>
<html lang="ja">

@extends('layouts.views_index')

@section('head')
<x-head title="記事検索結果" css="search_report_result" />
@endsection

@section('content')
<x-header />

<br>
<div class="container">
    <div class="row">
        @foreach($search_results as $search_result)
        <div class="box col-md-6">
            <div class="container">
            <div class="row">
                <div class="container cool-blues">
                    <div class="row">
                        <p class="card-header col-9">
                            {{$search_result->user->name}}
                        </p>
                        <p class="card-header col-3">
                            ID:{{$search_result->user->id}}
                        </p>
                    </div>
                </div>
                <div class="card-body border">
                    <a href="{{ url('/view_report/'.$search_result->id) }}">
                        {{$search_result->title}}
                    </a>
                </div>
            </div>
        </div>

        <br><br>
    </div>

    @endforeach

</div>
</div>

<div class="d-flex justify-content-center pagination">
    {{$search_results->links()}}
</div>
@endsection