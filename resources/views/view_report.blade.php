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
        @foreach($datas as $report)
        @if($flag==true)
        <a href="{{url('/edit_report/'.$report->id)}}">
            記事を編集する
        </a>

        <a href="{{url('/delete_report/'.$report->id)}}">
            記事を削除する
        </a>
        @endif
        
        <a href="{{url('/user_page/'.$report->user->id)}}">
            {{$report->user->name}}
        </a>
        
        {{$report->user->id}}
        {{$report->title}}
        {{$report->content}}
        @endforeach
    </main>

    @component('component.footer')
    @endcomponent
</body>

</html>