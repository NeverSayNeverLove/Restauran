<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thông tin đơn hàng</h1>
    <form action="send" method="post">
        {{csrf_field()}}
        Order ID :<input type="text" name ='order_id'>
        <input type="submit" value="send">
    </form>
</body>
</html>