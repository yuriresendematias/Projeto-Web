@extends('layouts.card')

@section('body')
<div class="card-header">{{ __('Resumo da Venda') }}</div>
    <div class="card-body">
        <p>Cliente:  {{$cliente_nome}}</p>
        <p>Data:     {{$venda_data}}</p>
        <p>Pago:     {{$venda_pago}}</p>
        <p>Vendedor: {{$vendedor}}</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> Produto</th> 
                    <th> Quantidade</th>
                    <th> Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($itens as $produto)
                    <tr>
                        <td>{{ $produto['nome'] }}</td>
                        <td>{{ $produto['quantidade'] }}</td>
                        <td>{{ $produto['preco'] }}</td>
                    </tr>
                @endforeach
            </tbody> 
        </table>

        <div class="row justify-content-center">
        <a class="btn btn-outline-primary md-6" href={{ URL::previous() }}>Voltar</a>
        </div>
    </div>
@endsection