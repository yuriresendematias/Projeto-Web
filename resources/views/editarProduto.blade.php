@extends('layouts.app')


@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Produto') }}</div>
                        <form action="/editarProduto/{{$produto->id}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group row">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="nome" type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ $produto->nome }}" required autofocus />

                                    @error('nome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="quantidade" class="col-md-4 col-form-label text-md-right">{{ __('quantidade') }}</label>

                                <div class="col-md-3">
                                    <input id="quantidade" type="number" min="1" name="quantidade" class="form-control @error('quantidade') is-invalid @enderror" value="{{ $produto->quantidade }}" required autofocus />

                                    @error('quantidade')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="validade" class="col-md-4 col-form-label text-md-right">{{ __('Validade') }}</label>

                                <div class="col-md-6">
                                    <input id="validade" type="date" name="validade" class="form-control @error('validade') is-invalid @enderror" value="{{ $produto->validade }}" required autofocus />

                                    @error('validade')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="precoCompra" class="col-md-4 col-form-label text-md-right">{{ __('Preço de Compra') }}</label>

                                <div class="col-md-3">
                                    <input id="precoCompra" type="text" name="precoCompra" class="form-control @error('precoCompra') is-invalid @enderror" value="{{ $produto->precoCompra }}" required autofocus placeholder="Ex: 3.50" />

                                    @error('precoCompra')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="precoVenda" class="col-md-4 col-form-label text-md-right">{{ __('Preço de Venda') }}</label>

                                <div class="col-md-3">
                                    <input id="precoVenda" type="text" name="precoVenda" class="form-control @error('precoVenda') is-invalid @enderror" value="{{ $produto->precoVenda }}" required autofocus placeholder="Ex: 5.00" />

                                    @error('precoVenda')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <input type="submit" value="Editar" class="btn btn-primary" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
