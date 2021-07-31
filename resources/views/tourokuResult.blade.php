<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>登録結果画面</title>
</head>

<body>
    <h1>◆SNS◆</h1>
    <p>ユーザー登録が完了しました。<br>
        ようこそ　{{$user->getName()}}さん</p>
    <a href="{{ url('/MyPage') }}">マイページへ</a>
</body>

</html>