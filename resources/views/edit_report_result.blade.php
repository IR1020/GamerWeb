<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        編集完了
    </title>
    
    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
</head>

<body>
    <main>
    <p>
        編集が完了しました。
    </p>
    
    <a href="{{url('/view_report/'.$report_id)}}">
        記事ページへ
    </a>
    </main>

    <x-footer/>
</body>

</html>