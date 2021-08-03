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
        ようこそ　{{$user_name}}さん
    </p>

    <a href="{{ url('/my_page') }}">
        マイページへ
    </a>   
</body>
</html>