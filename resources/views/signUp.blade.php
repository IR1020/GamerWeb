<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    
    <title>
        ユーザー登録画面
    </title>
</head>

<body>
    <h1>
        ユーザー登録
    </h1>
    
    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
    
    <p>
        ご希望のユーザー名とパスワードを入力してください。
    </p>
    
    <form action="sign_up" method="post">
        @csrf
            <p class="ItemName">
                ユーザー名:
            </p>
            <input type="text" name="user_name">

            <p class="ItemName">
                パスワード:
            </p>
            
            <input type="password" name="user_pass">
            
            <input type="submit" value="登録"><br>
    </form>
    
    @component('component.footer')
    @endcomponent
</body>
</html>