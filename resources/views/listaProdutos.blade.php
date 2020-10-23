@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-9 card">
                <div class="card-header row align-items-center justify-content-between">
                        <p class="font-weight-bold">{{ __('Lista de Produtos') }}</p>
                        <a class="btn btn-primary col-md-3 mr-3" href="/cadastrarProduto">Novo</a>
                    </div>
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

                                <?php if($produto->quantidade > 10) : ?>
                                    <td>{{ $produto->quantidade }}</td>
                                <?php else : ?>
                                    <td style="color:red" class="font-weight-bold">{{ $produto->quantidade }}</td>
                                <?php endif; ?>

                                <?php if(strtotime($produto->validade) - strtotime('now') > 2626782) : ?>
                                    <td>{{ $produto->validade }}</td>
                                <?php elseif(strtotime($produto->validade) - strtotime('now') <= 2626782 && strtotime($produto->validade) - strtotime('now') > 0) : ?>
                                    <td style="color:yellow" class="font-weight-bold">{{ $produto->validade }}</td>
                                <?php else : ?>
                                    <td style="color:red" class="font-weight-bold">{{ $produto->validade }}</td>
                                <?php endif; ?>

                                <td>R${{ $produto->precoVenda }}</td>
                                <td>
                                    <a class="btn btn-outline-info md-6" href="/produto/{{ $produto->id }}">Exibir</a>
                                    <a class="btn btn-outline-primary md-6" href="/editarProduto/{{ $produto->id }}">Editar</a>

                                    <?php if($produto->quantidade > 0) : ?>
                                        <a class="btn btn-outline-danger md-6" href="/deletarProduto/{{ $produto->id }}">Remover</a>
                                    <?php endif; ?>
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
