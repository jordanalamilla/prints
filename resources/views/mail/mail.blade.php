<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mail</title>

</head>
<body>

    <h1>
        Mail From {{ $sender }}: 
        <a href="http://art.jordanalamilla.com">art.jordanalamilla.com</a>
    </h1>

    <p>{{ $content }}</p>

</body>
</html>
