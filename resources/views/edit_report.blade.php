<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        記事編集画面
    </title>
    
    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
</head>

<body>
    <main>
    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach

    @foreach($datas as $report)
    <form action="{{url('/edit_report/'.$report->id)}}" method="post">
        @csrf
        <input type="text" name="report_title" value="{{$report->title}}"><br><br>

        <textarea name="report_content" rows="10" cols="70">{{$report->content}}</textarea><br>

        <input type="submit" value="編集"><br>
    </form>
    @endforeach
    </main>

    <x-footer/>
</body>

</html>