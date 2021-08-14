<x-components-head css="guest-user-header"/>

<div class="HeaderElement">
    <div class="HeaderItems">
        <img class="SiteLogo" src="{{asset('../public/img/logo01.png')}}" width="200" height="50" alt="logoImage01">

        <!-- 検索バー -->
        <x-search/>

        <ul class="SignInItemList">
            <li class="SignInItems">
                <a class="SignInItemUrls" href="{{ url('/sign_up') }}">新規登録</a>
            </li>

            <li class="SignInItems">
                <a class="SignInItemUrls" href="{{ url('/login') }}">ログイン</a>
            </li>
        </ul>
    </div>
</div>