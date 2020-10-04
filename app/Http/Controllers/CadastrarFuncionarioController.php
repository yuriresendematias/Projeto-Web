<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use \App\Validator\FuncionarioValidator;
use \App\Validator\ValidationException;
use Illuminate\Support\Facades\Hash;



class CadastrarFuncionarioController extends Controller
{
    public function criar(){
        return view('cadastroFuncionario');
    }

    public function cadastrar(Request $request){
        try {
            FuncionarioValidator::validate($request->all());
            $dados = $request->all();
            Funcionario::create([
                'nome' => $dados['nome'],
                'email' => $dados['email'],
                'cpf' => $dados['cpf'],
                'password' => Hash::make($dados['password']),
            ]);
            return redirect("listaFuncionarios");
        } catch(ValidationException $exception) {
            return redirect('cadastrarFuncionario')->withErrors($exception->getValidator())->withInput();
        }
    }
}
