<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Từ điển đơn giản</title>
</head>
<body>
<form method="post" action="{{route('translate')}}">
    @csrf
    <p>
        <input type="text" name="name" placeholder="Nhập từ bạn muốn tìm">
    </p>
    <p>
        <button type="submit">Hiển thị</button>
    </p>
</form>
</body>
</html>