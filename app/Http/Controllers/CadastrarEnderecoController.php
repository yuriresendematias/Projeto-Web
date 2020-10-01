<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class CadastrarEnderecoController extends Controller
{
    public function cadastrar(Request $request){
        try {
            \App\Validator\EnderecoValidator::validate($request->all());
            $dados = $request->all();
            \App\Models\Endereco::create($dados);
            return redirect("/listaEnderecos");
        } catch(\App\Validator\ValidationException $exception) {
            return redirect('cadastrarEndereco')->withErrors($exception->getValidator())->withInput();
        }
    }
}
