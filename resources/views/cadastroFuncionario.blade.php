@extends('layouts.card')
@section('body')
<div class="card-header">{{__('Cadastro de Funcionário')}}</div>
<div class="card-body">
    <form action="/cadastrarFuncionario" method="post">
        @csrf        
        <div class="form-group row justify-content-center">
            <div class="col-1">
                <label for="nome" class="col-form-label">{{ __('Nome:')}}</label>
            </div>
            <div class="col-md-8">
                <input id="nome" type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required autofocus />
            
                @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>  
        </div>

        <div class="form-group row justify-content-center">
            <div class="col-1">
                <label for="cpf" class="col-form-label">{{ __('CPF:')}}</label>
            </div>
            <div class="col-3">
                <input id="cpf" type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" value="{{ old('cpf') }}" required autofocus />
            
                @error('cpf')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>   
        
            <div class="col-2">
                <label for="email" class="col-form-label">{{ __('E-mail:')}}</label>
            </div>
            <div class="col-3">
                <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus />
            
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>   
        </div>

        <div class="form-group row justify-content-center">
            <div class="col-1">
                <label for="password" class="col-form-label">{{ __('Senha:')}}</label>
            </div>
            <div class="col-3">
                <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autofocus />
                
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="col-2">
                <label for="password_confirmation" class="col-form-label">{{ __('Confirmar Senha:')}}</label>
            </div>
            <div class="col-3">
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required autofocus />
            
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" id='eh_gerente' name='eh_gerente' > Gerente
            </label>
        </div>   

        <div class="btn col-12">
            <input type="submit" value="Cadastrar" class="btn btn-success"/>
            <a class="btn btn-danger md-6" href="{{ route('venda.cancelar') }}">Cancelar</a>
        </div>
        
    </form>
</div>
@endsection