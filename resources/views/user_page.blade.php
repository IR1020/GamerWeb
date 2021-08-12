<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        ユーザーページ
    </title>
    
    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
</head>

<body>
@component('component.guest_user_header')
    @endcomponent
    <main>
    <h1>
        <br>
        {{$user_name}}
    </h1>

    <h2>
        ID:{{$user_id}}
    </h2>
    
    @if($flag==true)
    <a href="{{url('/logout')}}">
        ログアウト
    </a><br><br>

    <a href="{{url('/write_report')}}">
        記事を投稿する
    </a><br><br>
    
    <a>
        投稿記事一覧
    </a><br><br>
    
    <a href="{{url('/delete_user/'.$user_id)}}">
        退会する
    </a>
    @endif
    
    </main>
    
    @component('component.footer')
    @endcomponent
</body>

</html>