<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/component/userSearch.css">
</head>

<form action="user-search" method="post">
            @csrf
            <input type="search" placeholder="名前を入力">
            <input type="submit" value="検索">
        </form>