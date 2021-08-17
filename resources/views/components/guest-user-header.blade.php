<x-components-head css="guest-user-header" />

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="site-logo" href="{{ url('/') }}"><img class="site-logo" src="{{asset('../public/img/logo_1.png')}}" alt="logoImage01"></a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/sign_up') }}">新規登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-right" href="{{ url('/login') }}">ログイン</a>
                </li>
            </ul>
            <form class="d-flex" action="{{url('/search_report')}}" method="get">
                <input class="form-control me-2" name="search_word" type="search" placeholder="記事を検索" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">検索</button>
            </form>
        </div>
    </div>
</nav>

<!-- <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">GamerWeb</a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="記事を検索" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">検索</button>
        </form>
    </div>
</nav>

<div class="header-element">
    <div class="header-items">
        <a href="{{ url('/') }}"><img class="site-logo" src="{{asset('../public/img/logo_1.png')}}" alt="logoImage01"></a>

        
        <form action="{{url('/search_report')}}" method="get">
            <input class="form-control me-2" name="search_word" type="search" placeholder="記事を検索" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">検索</button>
        </form>

        <ul class="sign-in-item-list">
            <li class="sign-in-items">
                <a class="sign-in-item-urls" href="{{ url('/sign_up') }}">新規登録</a>
            </li>

            <li class="sign-in-items">
                <a class="sign-in-item-urls" href="{{ url('/login') }}">ログイン</a>
            </li>
        </ul>
    </div>
</div> -->