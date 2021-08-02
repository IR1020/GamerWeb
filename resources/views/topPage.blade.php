<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    
    <title>
        トップページ
    </title>
    
    <link rel="stylesheet" href="../public/css/topPage.css">
</head>

<body>
    @component('component.guestUserHeader')
    @endcomponent

    <div class="TopDescription">
        <div class="DescriptionName">
            <h1 class="DescriptionName">GamerWebとは？</h1>
            <p class="Description">
                GamerWebは、ゲーム知識を他者と共有するアプリです。
                <br>
                ユーザー登録を行い、記事を投稿してみましょう！
            </p>
            <a href="{{url('/sign-up')}}" class="btn">今すぐユーザー登録を行う</a>
        </div>

        <img id="setsumei" src="../public/img/sns05.png" width="200" height="200" alt="sns01">
    </div>

    <div class="ServiceMenu">
        <div class="keijiban">
            <img class="ServiceImage" src="../public/img/sns03.png" width="200" height="200" alt="sns03">
            <h1 class="ServiceName">掲示板</h1>
            <p class="Description">登録無しで利用可能。<br>
                気軽に書き込みましょう！</p>
            <p class="btn">今すぐ始める</p>
        </div>

        <div class="sns">
            <img class="ServiceImage" src="../public/img/sns01.png" width="200" height="200" alt="sns03">
            <h1 class="ServiceName">SNS</h1>
            <p class="Description">登録無しでも閲覧できます。<br>
                気軽に始めてみましょう！</p>
            <p class="btn">今すぐ始める</p>
        </div>

        <div class="chat">
            <img class="ServiceImage" src="../public/img/sns02.png" width="200" height="200" alt="sns03">
            <h1 class="ServiceName">チャット</h1>
            <p class="Description">リアルタイムチャットです。<br>
                気軽に話しましょう！</p>
            <a href="{{url('/chat')}}" class="btn">今すぐ始める</a>
        </div>
    </div>
    <!-- <a href="{{ url('/touroku') }}"><img src="../public/img/wakaba.png" width="100" height="100" alt="初めてご利用の方"></a><br><br> -->

    @component('component.footer')
    @endcomponent
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script>

    </script>
</body>

</html>