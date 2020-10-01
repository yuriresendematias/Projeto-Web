<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Lista Produtos</title>
    </head>
    <body>
        <ul>
            @foreach ($produtos as $produto)
                <li>{{ $produto->nome }}</li>
            @endforeach
        </ul>
    </body>
</html>
