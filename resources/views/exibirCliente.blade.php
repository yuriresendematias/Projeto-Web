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
                        <br/>
                        <h3>Informações Pessoais</h3>
                        <label>Nome: {{ $cliente->nome }}</label><br/>
                        <label>Telefone: {{ $cliente->telefone }}</label><br/>
                        <label>Data de Nascimento: {{ $cliente->dataNascimento }}</label><br/>

                        <h3>Endereço</h3>
                        <label>Logradouro: {{ $endereco->logradouro }}</label><br/>
                        <label>Número: {{ $endereco->numero }}</label><br/>
                        <label>Bairro: {{ $endereco->bairro }}</label><br/>
                        <label>Cidade: {{ $endereco->cidade }}</label><br/>
                        <label>Ponto de Referência: {{ $endereco->pontoReferencia }}</label><br/>

                        <div class="form-group row d-flex justify-content-end">
                            <a class="btn btn-outline-primary col-md-3 mr-3" href="/editarCliente/{{ $cliente->id }}">Editar</a>
                            <a class="btn btn-outline-danger col-md-3" href="/deletarCliente/{{ $cliente->id }}">Deletar</a>
                        </div>

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
                            </tbody>
                        </table>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
