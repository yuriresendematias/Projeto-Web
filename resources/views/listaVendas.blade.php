@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 card">
                <div class="card-header row justify-content-center">{{ __('Lista de Venda') }}</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Cliente</th> 
                                <th> Valor  </th>
                                <th> Data   </th>
                                <th> Pago   </th>
                                <th> Opções </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vendas as $venda)
                            <tr>
                                <td>{{ $venda->cliente_id }}</td>
                                <td>{{ $venda->total }}</td>
                                <td>{{ $venda->created_at }}</td>
                                <td>{{ !$venda->fiado }}</td>
                                <td>
                                    <a class="btn btn-outline-info md-6" href="#">Exibir</a>
                                    <a class="btn btn-outline-primary md-6" href=" # ">Editar</a>
                                    <a class="btn btn-outline-danger md-6" href="#">Remover</a>
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






