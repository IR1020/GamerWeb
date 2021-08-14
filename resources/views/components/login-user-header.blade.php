<x-components-head css="guest-user-header" />

<div class="HeaderElement">
    <div class="HeaderItems">
        <a href="{{ url('/') }}"><img class="SiteLogo" src="{{asset('../public/img/logo_1.png')}}" width="200" height="50" alt="logoImage01"></a>

        <!-- 検索バー -->
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
</div>