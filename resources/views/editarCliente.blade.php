@extends('layouts.app')


@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar cliente') }}</div>
                        <form action="/editarCliente/{{$cliente->id}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <h3>Informações Pessoais</h3>
                            <div class="form-group row">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="nome" type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ $cliente->nome }}" required autofocus />

                                    @error('nome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                                <div class="col-md-6">
                                    <input id="telefone" type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror" value="{{ $cliente->telefone }}" required autofocus />

                                    @error('telefone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dataNascimento" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>

                                <div class="col-md-6">
                                    <input id="dataNascimento" type="text" name="dataNascimento" class="form-control @error('dataNascimento') is-invalid @enderror" value="{{ $cliente->dataNascimento }}" required autofocus />

                                    @error('dataNascimento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            </br>
                            <h3>Endereço</h3>
                            <div class="form-group row">
                                <label for="logradouro" class="col-md-4 col-form-label text-md-right">{{ __('Logradouro') }}</label>

                                <div class="col-md-6">
                                    <input id="logradouro" type="text" name="logradouro" class="form-control @error('logradouro') is-invalid @enderror" value="{{ $endereco->logradouro }}" required autofocus placeholder="Ex: Rua Limão" />

                                    @error('logradouro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Número') }}</label>

                                <div class="col-md-6">
                                    <input id="numero" type="text" name="numero" class="form-control @error('numero') is-invalid @enderror" value="{{ $endereco->numero }}" required autofocus placeholder="Ex: 408" />

                                    @error('numero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bairro" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>

                                <div class="col-md-6">
                                    <input id="bairro" type="text" name="bairro" class="form-control @error('bairro') is-invalid @enderror" value="{{ $endereco->bairro }}" required autofocus placeholder="Ex: Centro" />

                                    @error('bairro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                                <div class="col-md-6">
                                    <input id="cidade" type="text" name="cidade" class="form-control @error('cidade') is-invalid @enderror" value="{{ $endereco->cidade }}" required autofocus placeholder="Ex: Recife" />

                                    @error('cidade')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pontoReferencia" class="col-md-4 col-form-label text-md-right">{{ __('Ponto de Referencia') }}</label>

                                <div class="col-md-6">
                                    <input id="pontoReferencia" type="text" name="pontoReferencia" class="form-control @error('pontoReferencia') is-invalid @enderror" value="{{ $endereco->pontoReferencia }}" required autofocus placeholder="Ex: Ao lado do bar do Zé" />

                                    @error('pontoReferencia')
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
