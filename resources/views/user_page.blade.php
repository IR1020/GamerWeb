@extends('layouts.views_index')

@section('head')
<x-head title="ユーザーページ" css="user_page" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 mb-4">
            <div class="container">
                <div class="row card-body border border-2 shadow-sm rounded">
                    <p>
                        <i class="fas fa-user-circle fa-fw fa-lg"></i>
                        {{$user_name}}
                    </p>
                    <p>記事数：{{$count_report}}</p>
                </div>
            </div>
            <div class="container">
                <div class="row mt-4">
                    <p class="card-header text-center border border-2 rounded-top"><i class="fas fa-crown fa-fw text-warning"></i>
                        人気記事
                    </p>
                    @if($count_report==0)
                    <p class="card-body border border-2 rounded-bottom">記事はありません。</p>
                    @else
                    
                    <?php $i = 1; ?>
                    <div class="border border-2 rounded-bottom">
                        @foreach($popular_reports as $report)
                        <div class="mt-2 mb-2 d-flex flex-row">
                            <img src="{{asset('img/rank_'.$i.'.png')}}" width="40" height="30" alt="rank_{{$i}}">
                            <a class="mt-2 ms-2 fw-bold text-reset text-decoration-none" href="{{ url('/view_report/'.$report->id) }}">
                                {{$report->title}}
                            </a>
                            <?php $i++; ?>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="container">
                <div class="row">
                    <p class="card-header text-center blue-gradation">
                        <i class="fas fa-pencil-alt fa-fw fa-lg"></i>
                        新着記事
                    </p>
                    @if($count_report==0)
                    <p class="card-body border border-2 rounded-bottom">記事はありません。</p>
                    @else
                    @foreach($datas as $report)
                    <div class="card-body border">
                        <a class="fw-bold text-reset text-decoration-none" href="{{ url('/view_report/'.$report->id) }}">
                            {{$report->title}}
                        </a>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="d-flex justify-content-center pagination mt-3">
                    {{$datas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection