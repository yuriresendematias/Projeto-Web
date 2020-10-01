<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Cadastro Produto</title>
    </head>
    <body>
        <h1>Cadastrar Produto</h1>
        <form action="/cadastrarProduto" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            Nome: <input id="nome" type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required autofocus />

            Validade: <input id="validade" type="text" name="validade" class="form-control @error('validade') is-invalid @enderror" value="{{ old('validade') }}" required autofocus />

            Quantidade: <input id="quantidade" type="text" name="quantidade" class="form-control @error('quantidade') is-invalid @enderror" value="{{ old('quantidade') }}" required autofocus />

            Preco de Compra: <input id="precoCompra" type="text" name="precoCompra" class="form-control @error('precoCompra') is-invalid @enderror" value="{{ old('precoCompra') }}" required autofocus />

            Preco de Venda: <input id="precoVenda" type="text" name="precoVenda" class="form-control @error('precoVenda') is-invalid @enderror" value="{{ old('precoVenda') }}" required autofocus />

            @error('nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('validade')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('quantidade')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('precoCompra')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('precoVenda')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="submit" value="Cadastrar" />
        </form>
    </body>
</html>
