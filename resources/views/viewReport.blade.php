<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        記事ページ
    </title>
</head>

<body>
    <p class="user_name">
        {{$user_name}}
    </p>

    <p class="user_id">
        {{$user_id}}
    </p>

    <p class="report_title">
        {{$report_title}}
    </p>

    <p class="report_text">
        {{$report_text}}
    </p>

    @component('component.footer')
    @endcomponent
</body>

</html>