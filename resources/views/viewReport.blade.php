<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        記事ページ
    </title>

    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
</head>

<body>
    <main>
        <a href="{{url('/edit_report/'.$report_id)}}">
            記事を編集する
        </a>
        
        <a href="{{url('/delete_report/'.$report_id)}}">
            記事を削除する
        </a>

        <p class="user_name">
            {{$user_name}}
        </p>

        <p class="user_id">
            {{$user_id}}
        </p>

        <p class="report_title">
            {{$report_title}}
        </p>

        <p class="report_content">
            {{$report_content}}
        </p>
    </main>

    @component('component.footer')
    @endcomponent
</body>

</html>