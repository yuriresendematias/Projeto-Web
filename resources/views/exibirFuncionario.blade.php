@extends('layouts.card')
@section('body')
<div class="card-header">{{ __('Detalhes do Funcionário') }} </div>
<div class="card-body">
    <p>Nome:    {{$funcionario->nome}}</p>
    <p>E-mail:  {{$funcionario->email}}</p>
    <p>CPF:     {{$funcionario->cpf}}</p>

    <div class="btn col-12">
        @can('cadastrar', \App\Models\Funcionario::class)
            <a class="btn btn-outline-primary " href="/editarFuncionario/{{ $funcionario->id }}">Editar</a>
            <a class="btn btn-outline-danger" href="/deletarFuncionario/{{ $funcionario->id }}">Deletar</a>
        @endcan
        <a class="btn btn-outline-primary" href="/listaFuncionarios">Voltar</a>
    </div>
</div>    
@endsection