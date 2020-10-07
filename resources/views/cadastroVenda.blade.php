@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Nova Venda') }}</div>
                <div class="card-body">
                    <form method="POST" action="/adicionarItemVenda">
                        @csrf

                        <div class="form-group col-12">
                            <div class="row">
                                <div class="col-1">
                                    <label for="Cliente" class="col-form-label">{{ __('Cliente:') }}</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="cliente" placeholder="Nome do cliente" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-1">
                                    <label for="Produto" class="col-form-label">{{ __('Produto:')}}</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="produto" placeholder="Produto" class="form-control" value="{{ $filters['filter_product'] ?? ''}}">
                                </div>
                                    <button type="submit" class="btn btn-outline-success">Adicionar</button>
                            </div>
                        </div>
                    </form>

                    <div class="card col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Imagem</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $produto)
                                    <tr>
                                        <td>{{$produto->nome}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination justify-content-center">
                            {!! $produtos->links() !!}
                        </div>
                    </div>
                    
                    <form action="POST" action="/cadastrarVenda">
                        @csrf
                        <div class="btn col-md-12">
                            <button type="submit" class="btn btn-success md-6">Finalizar</button>
                            <button type="submit" class="btn btn-danger md-6">Finalizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection






