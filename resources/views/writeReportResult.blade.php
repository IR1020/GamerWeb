<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        投稿完了
    </title>
</head>

<body>
    <p>
        投稿が完了しました。
    </p>
    
    <a href="{{url('/view_report/'.$report_id)}}">
        記事ページへ
    </a>

    @component('component.footer')
    @endcomponent
</body>

</html>