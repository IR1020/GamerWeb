<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
</head>

<body>
    <h1>SNS名(ログイン画面)</h1>
    <p>ユーザー名とパスワードを入力してください。</p>

    <form action="login" method="post">
        @csrf
        <p>ユーザー名:<input type="text" name="name"></p>
        <p>パスワード:<input type="password" name="pass"></p>
        <p><input type="submit" value="ログイン"><br></p>
    </form>
</body>

</html>