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
    {{$search_result->user_id}}
    {{$search_result->user_name}}
    <a href="{{ url('/view_report/'.$search_result->report_id) }}">
    {{$search_result->report_title}}</a><br>
    {{$search_result->report_text}}<br><br>
    @endforeach
    
    <div class="page_number">{{$search_results->links()}}</div>
    </main>
    
    @component('component.footer')
    @endcomponent
</body>

</html>