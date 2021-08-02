<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        ユーザー登録完了画面
    </title>
</head>

<body>
    <h1>
        ユーザー登録完了
    </h1>

    <p>
        ユーザー登録が完了しました。<br>
        ようこそ　{{$user->getName()}}さん
    </p>

    <a href="{{ url('/my-page') }}">
        マイページへ
    </a>   
</body>
</html>