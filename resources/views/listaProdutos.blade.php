@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-9 card">
                <div class="card-header row justify-content-center">{{ __('Lista de Produtos') }}</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Nome </th>
                                <th> Quantidade </th>
                                <th> Validade </th>
                                <th> Preço </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->quantidade }}</td>
                                <td>{{ $produto->validade }}</td>
                                <td>{{ $produto->precoVenda }}</td>
                                <td>
                                    <a class="btn btn-outline-info md-6" href="/produto/{{ $produto->id }}">Exibir</a>
                                    <a class="btn btn-outline-primary md-6" href="/editarProduto/{{ $produto->id }}">Editar</a>
                                    <a class="btn btn-outline-danger md-6" href="/deletarProduto/{{ $produto->id }}">Remover</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        {!! $produtos->links() !!}
    </div>
</div>

@endsection
