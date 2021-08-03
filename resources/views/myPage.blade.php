<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        トップページ
    </title>
</head>

<body>
    <h1>
        {{$name}}
    </h1>

    <h2>
        ID:{{$id}}
    </h2>

    <a>
        記事を投稿する
    </a>
    
    <a>
        記事を編集する
    </a>
    
    <a>
        投稿記事一覧
    </a>

    @component('component.footer')
    @endcomponent
</body>

</html>