<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Cadastro Venda</title>
    </head>
    <body>
        <h1>Cadastrar Venda</h1>
        <form action="/cadastrarVenda" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            Valor total: <input id="total" type="text" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total') }}" required autofocus />

            Data: <input id="data" type="text" name="data" class="form-control @error('data') is-invalid @enderror" value="{{ old('data') }}" required autofocus />

            Fiado: <input id="fiado" type="text" name="fiado" class="form-control @error('fiado') is-invalid @enderror" value="{{ old('fiado') }}" required autofocus />

            Funcionario_id: <input id="funcionario_id" type="text" name="funcionario_id" class="form-control @error('funcionario_id') is-invalid @enderror" value="{{ old('funcionario_id') }}" required autofocus />

            Cliente_id: <input id="cliente_id" type="text" name="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" value="{{ old('cliente_id') }}" required autofocus />

            @error('total')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('data')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('fiado')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('funcionario_id')
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
