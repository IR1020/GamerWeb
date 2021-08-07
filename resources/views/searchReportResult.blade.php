<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        記事ページ
    </title>
    
    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
</head>

<body>
    <main>
    @foreach($search_results as $search_result)
    <a href="{{ url('/view_report/'.$search_result->report_id) }}">
    {{$search_result->report_title}}</a><br>
    {{$search_result->report_text}}<br><br>
    @endforeach
    
    {{$search_results->links()}}
    
    </main>
    
    @component('component.footer')
    @endcomponent
</body>

</html>