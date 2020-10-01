<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Lista Funcionários</title>
    </head>
    <body>
        <ul>
            @foreach ($funcionarios as $funcionario)
                <li>{{ $funcionario->nome }}</li>
            @endforeach
        </ul>
    </body>
</html>
