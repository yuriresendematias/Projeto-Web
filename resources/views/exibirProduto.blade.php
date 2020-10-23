@extends('layouts.app')


@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Produto') }}</div>
                    <ul>
                        <h3>Informações</h3>
                        <label>Nome: {{ $produto->nome }}</label><br/>
                        <label>quantidade: {{ $produto->quantidade }}</label><br/>
                        <label>Validade: {{ $produto->validade }}</label><br/>
                        <label>Preco de compra: R${{ $produto->precoCompra }}</label><br/>
                        <label>Preco de venda: R${{ $produto->precoVenda }}</label><br/>

                        <div class="form-group row d-flex justify-content-end">
                            <a class="btn btn-primary col-md-3 mr-3" href="/editarProduto/{{ $produto->id }}">Editar</a>
                            <?php if($produto->quantidade > 0) : ?>
                                <a class="btn btn-danger col-md-3" href="/deletarProduto/{{ $produto->id }}">Deletar</a>
                            <?php endif; ?>
                        </div>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
