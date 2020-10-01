<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Cadastro Cliente</title>
    </head>
    <body>
        <h1>Cadastrar Cliente</h1>
        <form action="/cadastrarCliente" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            Nome: <input id="nome" type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required autofocus />

            Telefone: <input id="telefone" type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror" value="{{ old('telefone') }}" required autofocus />

            Data de Nascimento: <input id="dataNascimento" type="text" name="dataNascimento" class="form-control @error('dataNascimento') is-invalid @enderror" value="{{ old('dataNascimento') }}" required autofocus />

            @error('nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('telefone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('dataNascimento')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="submit" value="Cadastrar" />
        </form>
    </body>
</html>
