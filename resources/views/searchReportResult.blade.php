<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        記事検索結果ページ
    </title>
    
    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
    <link rel="stylesheet" href="{{asset('../public/css/searchReportResult.css')}}">
</head>

<body>
    <main>
    @foreach($search_results as $search_result)
    {{$search_result->id}}
    {{$search_result->name}}
    <a href="{{ url('/view_report/'.$search_result->id) }}">
    {{$search_result->title}}</a><br>
    {{$search_result->content}}<br><br>
    @endforeach
    
    <div class="page_number">{{$search_results->links()}}</div>
    </main>
    
    @component('component.footer')
    @endcomponent
</body>

</html>