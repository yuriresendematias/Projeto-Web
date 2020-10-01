<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Cadastro Funcionario</title>
    </head>
    <body>
        <h1>Cadastrar Funcionario</h1>
        <form action="/cadastrarFuncionario" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            Nome: <input id="nome" type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required autofocus />

            CPF: <input id="cpf" type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" value="{{ old('cpf') }}" required autofocus />

            Email: <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus />

            @error('nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('cpf')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="submit" value="Cadastrar" />
        </form>
    </body>
</html>
