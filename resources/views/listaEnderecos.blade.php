<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Lista Endereços</title>
    </head>
    <body>
        <ul>
            @foreach ($enderecos as $endereco)
                <li>{{ $endereco->logradouro }}</li>
            @endforeach
        </ul>
    </body>
</html>
