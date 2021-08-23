@extends('layouts.views_index')

@section('head')
<x-head title="ログイン" css="sign_up_and_login" />
@endsection

@section('content')
    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
    
    <form class="col-md-4 offset-md-4 col-8 offset-2" action="{{url('/login')}}" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">ログイン</h1>
    <div class="form-floating">
        <input type="text" name="user_name" class="form-control" id="floatingInput" placeholder="名前">
        <label for="floatingInput">ユーザー名</label>
    </div><br>
    <div class="form-floating">
        <input type="password" name="user_password" class="form-control" id="floatingPassword" placeholder="パスワード">
        <label for="floatingPassword">パスワード</label>
    </div><br>
    
    <button class="w-15 btn btn-primary" type="submit">送信</button>
</form>
@endsection('content')