<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    
    <title>
        ログイン画面
    </title>
    
    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
</head>

<body>
    <main>
    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach

    <p>
        ユーザー名とパスワードを入力してください。
    </p>

    <form action="{{url('/login')}}" method="post">
        @csrf
        <p>
            ユーザー名:
        </p>

        <input type="text" name="user_name">

        <p>
            パスワード:
        </p>

        <input type="password" name="user_password">

        <input type="submit" value="ログイン">
    </form>
    </main>
    
    <x-footer/>
</body>
</html>