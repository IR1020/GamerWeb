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

    <form action="{{url('/edit_report/'.$report_id)}}" method="post">
        @csrf
        <input type="text" name="report_title" value={{$report_title}}><br><br>

        <textarea name="report_text" rows="10" cols="70">{{$report_text}}</textarea><br>

        <input type="submit" value="編集"><br>
    </form>
    </main>

    @component('component.footer')
    @endcomponent
</body>

</html>