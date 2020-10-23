@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 card">
                <div class="card-header row justify-content-center">{{ __('Funcionários') }}</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Funcionario</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($funcionarios as $funcionario)
                            <tr>
                                <td>{{ $funcionario->nome }}</td>
                                <td>
                                    <a class="btn btn-outline-info" href="{{ route('funcionario.exibir', ['funcionario_id'=>$funcionario->id]) }}">Exibir</a>
                                    @can('cadastrar', \App\Models\Funcionario::class)
                                        <a class="btn btn-outline-primary " href="/editarFuncionario/{{ $funcionario->id }}">Editar</a>
                                        <a class="btn btn-outline-danger" href="{{ route('funcionario.deletar', ['id' => $funcionario->id]) }}">Remover</a>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        {!! $funcionarios->links() !!}
    </div>
    <div class="row justify-content-center">
        <a class="btn btn-outline-info" href="{{ route('home')}}">Home</a>
        
    </div>
</div>
@endsection