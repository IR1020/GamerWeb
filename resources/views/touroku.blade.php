<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>新規登録画面</title>
</head>

<body>
    <h1>新規登録</h1>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    <p>ご希望のユーザー名とパスワードを入力してください。</p>
    <form action="touroku" method="post">
        @csrf
            ユーザー名:<input type="text" name="name">

            パスワード:<input type="password" name="pass">
            <input type="submit" value="登録"><br>
    </form>
</body>
</html>