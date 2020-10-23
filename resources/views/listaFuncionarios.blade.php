@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 card">
                <div class="card-header row justify-content-center">{{ __('Lista de Funcionários') }}</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Funcionário</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($funcionarios as $funcionario)
                            <tr>
                                <td>{{ $funcionario->nome }}</td>
                                <td>
                                    <a class="btn btn-outline-info" href="{{ route('funcionario.exibir', ['funcionario_id'=>$funcionario->id]) }}">Exibir</a>
                                    <a class="btn btn-outline-danger" href="{{ route('funcionario.deletar', ['id' => $funcionario->id]) }}">Remover</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        {!! $funcionarios->links() !!}
    </div>
</div>
@endsection
