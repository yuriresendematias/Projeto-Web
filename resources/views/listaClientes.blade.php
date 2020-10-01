<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Lista Clientes</title>
    </head>
    <body>
        <ul>
            @foreach ($clientes as $cliente)
                <li>{{ $cliente->nome }}</li>
            @endforeach
        </ul>
    </body>
</html>
