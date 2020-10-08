@extends('layouts.app')


@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header row align-items-center justify-content-between">
                        <p class="font-weight-bold">{{ __('Lista de Clientes') }}</p>
                        <a class="btn btn-primary col-md-3 mr-3" href="/cadastrarCliente">Novo</a>
                    </div>
                    <ul>
                        @foreach ($clientes as $cliente)
                            <div class="card col-md-11 px-5 py-3 my-1 border-secondary">
                                <a href="/cliente/{{ $cliente->id }}">{{ $cliente->nome }}</a>
                                <div class="form-group row d-flex justify-content-end">
                                    <a class="btn btn-primary col-md-3 mr-3" href="/editarCliente/{{ $cliente->id }}">Editar</a>
                                    <a class="btn btn-danger col-md-3" href="/deletarCliente/{{ $cliente->id }}">Deletar</a>
                                </div>
                            </div>
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
