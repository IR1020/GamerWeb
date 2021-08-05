<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    <title>
        ログイン結果画面
    </title>
</head>

<body>
    @if($flag->getFlag()==true)
    <h1>
        ログイン完了
    </h1>

    <p>
        ログインが完了しました。<br>
        ようこそ　{{$user_name}}さん
    </p>

    <a href="{{url('/my_page')}}">
        マイページへ
    </a>
    <!-- <a href="{{url('/my_page/'.$user_name)}}">
        マイページへ
    </a> -->

    @else
    <h1>
        ログイン失敗
    </h1>

    <p>
        ログインできませんでした。
    </p>

    <a class="Url" href="{{ url('/login') }}">
        再度ログイン認証を行う
    </a>
    @endif
    
    @component('component.footer')
    @endcomponent
</body>

</html>