@extends('layouts.app')


@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Deletar Produto') }}</div>
                        <form action="/deletarProduto/{{ $produto->id }}" method="post">
                            @csrf

                            <div class="col-md-6">
                                <h3>Tem certeza que deseja excluir este produto?</h3><br/>
                                <label>{{ $produto->nome }}</label><br/>
                                <label>{{ $produto->validade }}</label><br/>
                                <label>{{ $produto->quantidade }}</label>
                                <br/>
                            </div>
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" value="Confirmar" class="btn btn-danger" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
