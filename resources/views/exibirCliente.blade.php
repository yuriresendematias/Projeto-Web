@extends('layouts.app')


@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cliente') }}</div>
                    <ul>
                        <label>{{ $cliente->nome }}</label><br/>
                        <label>{{ $cliente->telefone }}</label><br/>
                        <label>{{ $cliente->dataNascimento }}</label>
                        <div class="form-group row d-flex justify-content-end">
                            <a class="btn btn-primary col-md-3 mr-3" href="/editarCliente/{{ $cliente->id }}">Editar</a>
                            <a class="btn btn-danger col-md-3" href="/deletarCliente/{{ $cliente->id }}">Deletar</a>
                        </div>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
