<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    
    <title>
        ログイン画面
    </title>
</head>

<body>
    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach

    <p>
        ユーザー名とパスワードを入力してください。
    </p>

    <form action="login" method="post">
        @csrf
        <p>
            ユーザー名:
        </p>

        <input type="text" name="user_name">

        <p>
            パスワード:
        </p>

        <input type="password" name="user_pass">

        <input type="submit" value="ログイン">
    </form>
    
    @component('component.footer')
    @endcomponent
</body>
</html>