<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('../public/css/components/guest-user-header.css')}}">
</head>

<header>
    <div class="HeaderElement">
        <img class="SiteName" src="{{asset('../public/img/logo01.png')}}" width="200" height="50" alt="logo01">

        <!-- 検索バー -->
        <x-search/>

        <ul class="SignUpElement">
            <li class="Item">
                <a class="Url" href="{{ url('/sign-up') }}">新規登録</a>
            </li>

            <li class="Item">
                <a class="Url" href="{{ url('/login') }}">ログイン</a>
            </li>
        </ul>
    </div>
</header>