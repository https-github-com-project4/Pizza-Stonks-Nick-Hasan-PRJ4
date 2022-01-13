<!doctype html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="images/logo.png">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <title>Stonks pizza's</title>
    </head>
    <body>
        <table>
            @foreach($pizzas as $pizza)

                <div>{{$pizza->name}}</div>


            @endforeach

        </table>
    </body>
</html>
