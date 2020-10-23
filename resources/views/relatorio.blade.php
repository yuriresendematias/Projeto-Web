@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header row align-items-center justify-content-between">
                    <p class="font-weight-bold col-md-3 mt-3">{{ __('Relatório') }}</p>
                    <a class="btn btn-primary col-md-3 mr-3" href="/filtrarRelatorio">Novo Relatório</a>
                </div>

                <div class="card-body">

                    <p>Valor Total Venda: R${{$total}}</p>
                    <p>Valor Total Compra: R${{$totalCompra}}</p>
                    <p>Lucro: R${{$total - $totalCompra}}</p>
                    <h3>Histórico de compras</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Valor  </th>
                                <th> Data   </th>
                                <th> Opções </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($vendas) == 0) : ?>
                                <td>Nenhuma venda encontrada entre essas datas!</td>
                            <?php else : ?>
                                @foreach ($vendas as $venda)
                                <tr>
                                    <td>{{ $venda->total }}</td>
                                    <td>{{ $venda->created_at }}</td>
                                    <td>
                                        <a class="btn btn-outline-info" href="{{ route('venda.exibir', ['venda_id'=>$venda->id]) }}">Exibir</a>
                                        <a class="btn btn-outline-danger" href="{{ route('venda.deletar', ['id' => $venda->id]) }}">Remover</a>
                                    </td>
                                </tr>
                                @endforeach
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
