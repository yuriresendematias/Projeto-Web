<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class CadastrarFuncionarioController extends Controller
{
    public function cadastrar(Request $request){
        try {
            \App\Validator\FuncionarioValidator::validate($request->all());
            $dados = $request->all();
            \App\Models\Funcionario::create($dados);
            return redirect("/listaFuncionarios");
        } catch(\App\Validator\ValidationException $exception) {
            return redirect('cadastrarFuncionario')->withErrors($exception->getValidator())->withInput();
        }
    }
}
