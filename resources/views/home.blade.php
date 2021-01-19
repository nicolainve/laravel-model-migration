<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>

    <body>

        <ul>
            @foreach ($cars as $car)
                <li>
                    <h2>{{ $car->marca }}</h2>
                    <h3>{{ $car->modello }}</h3>
                    <h4>{{ $car->targa }}</h4>
                </li>
            @endforeach
        </ul>
        
    </body>
</html>
