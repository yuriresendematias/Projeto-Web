<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Cadastro Endereço</title>
    </head>
    <body>
        <h1>Cadastrar Endereço</h1>
        <form action="/cadastrarEndereco" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            Logradouro: <input id="logradouro" type="text" name="logradouro" class="form-control @error('logradouro') is-invalid @enderror" value="{{ old('logradouro') }}" required autofocus />

            Número: <input id="numero" type="text" name="numero" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') }}" required autofocus />

            Bairro: <input id="bairro" type="text" name="bairro" class="form-control @error('bairro') is-invalid @enderror" value="{{ old('bairro') }}" required autofocus />

            Cidade: <input id="cidade" type="text" name="cidade" class="form-control @error('cidade') is-invalid @enderror" value="{{ old('cidade') }}" required autofocus />

            Ponto de Referência: <input id="pontoReferencia" type="text" name="pontoReferencia" class="form-control @error('pontoReferencia') is-invalid @enderror" value="{{ old('pontoReferencia') }}" required autofocus />

            Cliente_id: <input id="cliente_id" type="text" name="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" value="{{ old('cliente_id') }}" required autofocus />

            @error('logradouro')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('numero')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('bairro')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('cidade')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('pontoReferencia')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('cliente_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="submit" value="Cadastrar" />
        </form>
    </body>
</html>
