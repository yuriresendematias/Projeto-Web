@extends('layouts.card')
@section('body')
<div class="card-header">{{__('Excluir Funcionario - ').$funcionario->nome}}</div>
<div class="card-body">
    <form action="/deletarFuncionario/{{ $funcionario->id }}" method="post">
        @csrf

        <div class="row justify-content-center">
            <h3>Tem certeza que deseja desativar este funcionário?</h3><br/>
        </div>
        <div class="row justify-content-center">
            <p>{{$funcionario->nome}}</p>
        </div>
        <div class="row justify-content-center">
            <a class="btn btn-success " href={{ URL::previous() }}>Voltar</a>
            <input type="submit" value="Confirmar" class="btn btn-danger" />
        </div>
    </form>
</div>
    
@endsection