<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        トップページ
    </title>
    
    <link rel="stylesheet" href="../public/css/body.css">
</head>

<body>
    <h1>
        {{$user_name}}
    </h1>

    <h2>
        ID:{{$user_id}}
    </h2>

    <a href="{{url('/write_report')}}">
        記事を投稿する
    </a>
    
    <a href="{{url('/edit_report')}}">
        記事を編集する
    </a>
    
    <a>
        投稿記事一覧
    </a>

    @component('component.footer')
    @endcomponent
</body>

</html>