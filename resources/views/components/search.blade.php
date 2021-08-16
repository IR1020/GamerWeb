<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('../public/css/components/search.css')}}">
</head>

<div class="search-element">
    <p class="search-element-message">
        ▼登録せずにサービスを利用
    </P>
    <form action="{{url('/search_report')}}" method="get" class="search-container">
        @csrf
        <input type="text" name="search_word" placeholder="記事を検索">
        <input type="submit" value="検索">
    </form>
</div>