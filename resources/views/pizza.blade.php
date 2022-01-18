<!doctype html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="images/logo.png">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Stonks pizza's</title>
    </head>
    <body>

    <ul class="flex">
        <li class="flex-1 mr-2">
            <a class="text-center block border border-red-500 rounded py-2 px-4 bg-red-500 hover:bg-blue-700 text-white" href="/menu">Pizza's</a>
        </li>
        <li class="flex-1 mr-2">
            <a class="text-center block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white" href="/contact">contact</a>
        </li>
    </ul>

        @foreach($pizzas as $pizza)<form action="">
                <div class="grid-pizza">
                    <img class="width300px" src="/images/Salami.png" alt="pizza image">
                    <p>{{$pizza->name}}</p>
                    @foreach($pizza->ingredients as $ingredient)
                        <p> {{$ingredient->name}}  </p>
                    @endforeach

                    <button class="bg-red-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                       <a herf="">Bestellen</a>
                    </button>
                    <th> <button class="bg-red-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"><a href="/pizza/{{$pizza->id}}/bewerken">Bewerken</a></button></th><br>
                </div>

        @endforeach
    </body>
</html>
