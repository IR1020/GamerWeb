@extends('layouts.views_index')

@section('head')
<x-head title="記事削除" css="delete" />
@endsection

@section('content')
<form class="container" action="{{url('/delete_report/'.$report_id)}}" method="post">
    @csrf
    <p class="h6 mt-4">本当に記事を削除しますか？</p>
    <p class="text-danger h6">※削除すると元には戻せません</p>
    <input class="mt-4" type="radio" name="select" value="はい">はい</button>
    <input class="mt-4 ms-4" type="radio" name="select" value="いいえ">いいえ</button><br>
    <input class="btn btn-primary w-15 mt-3" type="submit">
</form>
@endsection('content')