<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('../public/css/component/search.css')}}">
</head>
<div class="SearchElement">
    <p class="SearchElementMessage">
        ▼登録せずにサービスを利用
    </P>
    <form action="search" method="post">
        @csrf
        <input type="search" placeholder="記事を検索">
        <input type="submit" value="検索">
    </form>
</div>