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

            Senha: <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autofocus />

            Confirmar senha: <input id="password_confirmation" type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required autofocus />

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

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
