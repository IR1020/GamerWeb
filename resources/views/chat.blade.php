<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ルーム選択ページ</title>
    <link rel="stylesheet" href="../public/css/chat.css">
</head>

<body>
    @component('component.guestUserHeader')
    @endcomponent

    <br><br><br>
    <?php $roomNumber ?>
    @for($roomNumber=1;$roomNumber<=40;$roomNumber++) <form action="chat_room" method="get">
        @csrf
        <input type="submit" value="チャットルーム{{$roomNumber}}">

        <input type="hidden" name="roomNumber" value="{{$roomNumber}}">
        </form>
        @endfor

        @component('component.footer')
        @endcomponent

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../public/js/chat.js">
        </script>
</body>

</html>