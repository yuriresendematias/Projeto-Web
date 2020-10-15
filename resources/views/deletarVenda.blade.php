@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 card">
                <div class="card-header row justify-content-center">{{ __('Lista de Venda') }}</div>
                <div class="card-body">
                    <form action="/deletarVenda/{{ $id }}" method="post">
                        @csrf

                        <div class="row justify-content-center">
                            <h3>Tem certeza que deseja excluir esta venda?</h3><br/>
                        </div>
                        <div class="row justify-content-center">
                            <a class="btn btn-success" href={{ URL::previous() }}>Voltar</a>
                        
                            <input type="submit" value="Confirmar" class="btn btn-danger" />
                        </div>
                    </form>
                    
                </div>
        </div>
    </div>
</div>

@endsection






