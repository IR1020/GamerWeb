@extends('layouts.views_index')

@section('head')
<x-head title="記事" css="" />
@endsection

@section('content')
<x-header /><br>

@foreach($datas as $report)
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <a href="{{url('/user_page/'.$report->user->id)}}">
                <i class="fas fa-user-circle fa-fw"></i>
                {{$report->user->name}}
            </a>
        </div>

        <div class="col-lg-4">
            <p>
                最終更新日：{{$report->updated_at}}
            </p>
        </div>

        <h3>
            {{$report->title}}
        </h3>

        @if($flag==true)
        <div class="flex-row">
            <a href="{{url('/edit_report/'.$report->id)}}">
                <i class="far fa-edit fa-fw"></i>
                記事を編集する
            </a>
            <a href="{{url('/delete_report/'.$report->id)}}">
                <i class="far fa-trash-alt fa-fw"></i>
                記事を削除する
            </a>
        </div>
        @endif
        
        <p>
            <br>
            {{$report->content}}
        </p>
        @endforeach

    </div>
</div>

<x-footer />

@endsection