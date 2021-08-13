<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('../public/css/components/search.css')}}">
</head>

<div class="SearchElement">
    <p class="SearchElementMessage">
        ▼登録せずにサービスを利用
    </P>
    <form action="{{url('/search-report')}}" method="get">
        @csrf
        <input type="search" name="search_word" placeholder="記事を検索">
        <input type="submit" value="検索">
    </form>
</div>