@extends('layouts.app')


@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Deletar cliente') }}</div>
                        <form action="/deletarCliente/{{ $cliente->id }}" method="post">
                            @csrf

                            <div class="col-md-6">
                                <h3>Tem certeza que deseja excluir este cliente?</h3><br/>
                                <label>{{ $cliente->nome }}</label><br/>
                                <label>{{ $cliente->telefone }}</label><br/>
                                <label>{{ $cliente->dataNascimento }}</label>
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
