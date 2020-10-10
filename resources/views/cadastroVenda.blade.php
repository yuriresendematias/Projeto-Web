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
                                    <label for="Produto" class="col-form-label">{{ __('Produto:')}}</label>
                                </div>
                                <div class="col-6">
                                    <select id="produto_id" class="form-control" name="produto_id">
                                        @foreach ($produtos as $produto)
                                            <option value="{{$produto->id}}">{{$produto->nome}} 
                                                                            ( quantidade = {{$produto->quantidade}}
                                                                            / validade = {{$produto->validade}})</option>
                                        @endforeach                              
                                    </select>
                                </div>
                                <div class="col-1">
                                    <label for="quantidade" class="col-form-label">Quantidade: </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control col-7" name="quantidade">
                                </div>
                                
                                <button type="submit" class="btn btn-outline-success">Adicionar</button>
                            </div>
                        </div>
                    </form>

                    <div class="card col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Produto</th> 
                                    <th> Qauntidade</th>
                                    <th> Valor</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Session::get('itens') as $k => $produto)
                                    <tr>
                                        <td>{{ $produto['nome'] }}</td>
                                        <td>{{ $produto['quantidade'] }}</td>
                                        <td>{{ $produto['preco'] }}</td>
                                        <td>
                                            <a class="btn btn-outline-success md-6" href="{{ route('item.editar', ['produto_id'=>$k]) }}">Editar</a>
                                            <a class="btn btn-outline-danger md-6" href="{{ route('item.excluir', ['produto_id'=>$k]) }}">Remover</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <form method="POST" action="/cadastrarVenda">
                        @csrf
                        <div class="row">
                            <div class="col-1">
                                <label for="Cliente" class="col-form-label">{{ __('Cliente:') }}</label>
                            </div>
                            <div class="col-6">
                                <select id="cliente_id" name="cliente_id" class="form-control">
                                    @foreach ($clientes as $cliente)
                                        <option value={{$cliente->id}}>{{ $cliente->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="fiado" name="fiado">
                                <label class="custom-control-label" for="fiado">Fiado</label>
                            </div>
                        </div>
                        <div class="btn col-md-12">
                            <button type="submit" class="btn btn-success md-6">Finalizar</button>
                            <a class="btn btn-danger md-6" href="{{ route('home') }}">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection






