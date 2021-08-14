<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    <title>
        退会結果画面
    </title>

    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
</head>

<body>
    <main>
        @if($flag==true)
        <p>
            退会しました。<br>
            ご利用ありがとうございました。
        </p>

        <a href="{{url('/')}}">
            トップページへ
        </a>

        @else
        <p>
            退会をキャンセルしました。
        </p>
        
        <a href="{{url('/user_page/'.$page_id)}}">
            マイページへ
        </a>
        @endif

    </main>

    <x-footer/>
</body>

</html>