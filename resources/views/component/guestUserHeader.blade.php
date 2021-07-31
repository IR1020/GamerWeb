<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/component/guestUserHeader.css">
</head>

<header>

    @component('component.search')
    @endcomponent

    <img class="SiteName" src="../public/img/logo01.png" width="200" height="50" alt="logo01">

    <ul class="headerList">
        <li id="headerList">
            <a id="headerList" href="{{ url('/touroku') }}">新規登録</a>
        </li>
        <li id="headerList">
            <a id="headerList" href="{{ url('/touroku') }}">ログイン</a>
        </li>
    </ul>
</header>