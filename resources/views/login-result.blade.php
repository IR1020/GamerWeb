<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    <title>
        ログイン結果画面
    </title>
    
    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
</head>

<body>
    <main>
    @if($flag==true)
    <p>
        ログインが完了しました。<br>
        ようこそ　{{$user_name}}さん
    </p>

    <a href="{{url('/user-page/'.$page_id)}}">
        マイページへ
    </a>

    @else
    <p>
        ログインできませんでした。
    </p>

    <a class="Url" href="{{ url('/login') }}">
        再度ログイン認証を行う
    </a>
    @endif
    </main>
    
    <x-footer/>
</body>

</html>