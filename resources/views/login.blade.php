<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    
    <title>
        ログイン画面
    </title>
</head>

<body>
    <h1>
        SNS名(ログイン画面)
    </h1>
    
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

        <input type="text" name="name">

        <p>
            パスワード:
        </p>

        <input type="password" name="pass">

        <input type="submit" value="ログイン">
    </form>
</body>
</html>