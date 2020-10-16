@extends('layouts.card')
@section('body')
<div class="card-header">{{ __('Editar Funcionario') }}</div>
<div class="card-body">

    <form action="{{ route('funcionario.atualizar' ,$funcionario->id) }}" method="post">
    @csrf

    <input type="hidden" name="id" value="{{ $funcionario->id }}" />

    <div class="form-group row">
        <label for="nome" class="col-md-1 col-form-label text-md-right">Nome: </label>
        <div class="col-md-6">
            <input id='nome' type="text" class="form-control @error('nome') is-invalid @enderror" name='nome' value="{{ $funcionario->nome }} " required autofocus/>
            @error('nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-1 col-form-label text-md-right">Email: </label>
        <div class="col-md-3">
            <input type="text" class="form-control  @error('email') is-invalid @enderror" name='email' value="{{$funcionario->email}}" required autofocus/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
        </div>
    
        <label for="cpf" class="col-md-1 col-form-label text-md-right">Cpf: </label>
        <div class="col-md-2">
            <input type="text" class="form-control @error('cpf') is-invalid @enderror" name='cpf' value="{{$funcionario->cpf}}" required autofocus />
            @error('cpf')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>  
            @enderror
        </div>
    </div>

    <div class="btn col-12">
        <button type="submit" class="btn btn-outline-success">Editar</button>
        <a class="btn btn-outline-danger" href="{{ URL::previous() }}">Cancelar</a>
    </div>
    </form>
</div>
@endsection