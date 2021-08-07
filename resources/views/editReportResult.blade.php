<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        編集完了
    </title>
    
    <link rel="stylesheet" href="../public/css/body.css">
</head>

<body>
    <p>
        編集が完了しました。
    </p>
    
    <a href="{{url('/view_report/'.$report_id)}}">
        記事ページへ
    </a>

    @component('component.footer')
    @endcomponent
</body>

</html>