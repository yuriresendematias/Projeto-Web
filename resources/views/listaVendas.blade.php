@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 card">
                <div class="card-header row justify-content-center">{{ __('Lista de Vendas') }}</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Cliente</th>
                                <th> Valor  </th>
                                <th> Data   </th>
                                <th> Opções </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vendas as $venda)
                            <tr>
                                <td>{{ $venda->cliente_id }}</td>
                                <td>{{ $venda->total }}</td>
                                <td>{{ $venda->created_at }}</td>
                                <td>
                                    <a class="btn btn-outline-info" href="{{ route('venda.exibir', ['venda_id'=>$venda->id]) }}">Exibir</a>
                                    <a class="btn btn-outline-danger" href="{{ route('venda.deletar', ['id' => $venda->id]) }}">Remover</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        {!! $vendas->links() !!}
    </div>
</div>

@endsection






