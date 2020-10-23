@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header row align-items-center justify-content-between">
                    <p class="font-weight-bold col-md-3 mt-3">{{ __('Relatório') }}</p>
                </div>

                <div class="card-body">
                    <p class="col-md-3 mt-3">{{ __('Escolha as datas') }}</p>
                    <form action="/relatorio" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group row">
                            <label for="inicio" class="col-md-4 col-form-label text-md-right">{{ __('Início') }}</label>

                            <div class="col-md-3">
                                <input id="inicio" type="date" name="inicio" class="form-control @error('inicio') is-invalid @enderror" value="{{ old('inicio') }}" required autofocus placeholder="Ex: 2021-10-01" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fim" class="col-md-4 col-form-label text-md-right">{{ __('Fim') }}</label>

                            <div class="col-md-3">
                                <input id="fim" type="date" name="fim" class="form-control @error('fim') is-invalid @enderror" value="{{ old('fim') }}" required autofocus placeholder="Ex: 2021-10-01" />
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" value="Filtrar" class="btn btn-primary" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
