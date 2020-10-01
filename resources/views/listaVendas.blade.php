<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Lista Vendas</title>
    </head>
    <body>
        <ul>
            @foreach ($vendas as $venda)
                <li>{{ $venda->total }}</li>
                <li>{{ $venda->data }}</li>
            @endforeach
        </ul>
    </body>
</html>
