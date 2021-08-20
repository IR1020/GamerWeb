@extends('layouts.views_index')

@section('head')
<x-head title="ユーザー登録" css="sign_up_and_login" />
@endsection

@section('content')
@foreach ($errors->all() as $error)
<li>
    {{$error}}
</li>
@endforeach

<form action="{{url('/sign_up')}}" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">ユーザー登録</h1>
    <div class="form-floating">
        <input type="text" name="user_name" class="form-control" id="floatingInput" placeholder="名前">
        <label for="floatingInput">ユーザー名</label>
    </div>
    <div class="form-floating">
        <input type="password" name="user_password" class="form-control" id="floatingPassword" placeholder="パスワード">
        <label for="floatingPassword">パスワード</label>
    </div>

    <br>
    
    <button class="w-100 btn btn-lg btn-primary" type="submit">送信</button>
</form>
@endsection