@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Editar item') }}</div>
                <div class="card-body">
                    <form action="{{route('item.atualizar', $id)}}" method="POST">
                        @csrf
                    
                        <input type="hidden" name="produto_id" value="{{ $id }}" />

                        <div class="row justify-content-center">
                            <div class="col-0">
                                <label for="quantidade" class="col-form-label">Quantidade: </label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" name="quantidade">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-outline-success md-6">Editar</button>
                                <a class="btn btn-outline-danger md-6" href="{{ route('venda.cadastrar') }}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection