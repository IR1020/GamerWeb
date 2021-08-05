<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        記事ページ
    </title>
</head>

<body>
    <h1>
        記事ページ
    </h1>

    <p>
        {{$user_id}}{{$user_name}}{{$report_id}}{{$report_title}}{{$report_text}}
    </p>

    @component('component.footer')
    @endcomponent
</body>

</html>