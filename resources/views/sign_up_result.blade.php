<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    
    <title>
        ユーザー登録完了画面
    </title>
    
    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
</head>

<body>
    <main>
    <p>
        ユーザー登録が完了しました。<br>
        ようこそ　{{$user_name}}さん
    </p>

    <a href="{{ url('/user_page/'.$page_id) }}">
        マイページへ
    </a>
    </main>
    
    <x-footer/>
</body>
</html>