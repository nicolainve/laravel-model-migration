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

        <div id="app">
            <p>Bikes</p>
            <ul>
                <li v-for="bike in bikes">
                    <h2>@{{ bike.marca }}</h2>
                    <h3>@{{ bike.modello }}</h3>
                    <h4>@{{ bike.targa }}</h4>
                </li>
            </ul>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        
    </body>
</html>
