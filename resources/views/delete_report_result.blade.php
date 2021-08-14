<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    <title>
        記事削除結果画面
    </title>
    
    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
</head>

<body>
    <main>
    @if($flag==true)
    <p>
        記事の削除が完了しました。
    </p>
    @else
    <p>
        記事の削除をキャンセルしました。
    </p>
    @endif
    
    <a href="{{url('/user_page/'.$page_id)}}">
        マイページへ
    </a>
    
    </main>
    
    <x-footer/>
</body>

</html>