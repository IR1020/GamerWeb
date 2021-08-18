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
                    <a class="nav-link" href="{{ url('/write_report') }}">記事を投稿</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-right" href="{{ url('/logout') }}">ログアウト</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-right" href="{{ url('/delete_user') }}">退会</a>
                </li>
            </ul>
            <form class="d-flex" action="{{url('/search_report')}}" method="get">
                <input class="form-control me-2" name="search_word" type="search" placeholder="記事を検索" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">検索</button>
            </form>
        </div>
    </div>
</nav>

<!-- <div class="HeaderElement">
    <div class="HeaderItems">
        <a href="{{ url('/') }}"><img class="SiteLogo" src="{{asset('../public/img/logo_1.png')}}" width="200" height="50" alt="logoImage01"></a>

        検索バー
        <x-search />

        <ul class="SignInItemList">
            <li class="SignInItems">
                <a class="SignInItemUrls" href="{{ url('/write_report') }}">記事を書く</a>
            </li>

            <li class="SignInItems">
                <a class="SignInItemUrls" href="{{ url('/logout') }}">ログアウト</a>
            </li>
        </ul>
    </div>
</div> -->