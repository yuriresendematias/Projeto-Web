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
        $this->authorize("cadastrar", \App\Models\Funcionario::class);

        return view('cadastroFuncionario');
    }

    public function cadastrar(Request $request){
        $this->authorize("cadastrar", \App\Models\Funcionario::class);

        try {
            FuncionarioValidator::validate($request->all());
            $dados = $request->all();
            $dados['eh_gerente'] = array_key_exists('eh_gerente', $dados);

            Funcionario::create([
                'nome' => $dados['nome'],
                'email' => $dados['email'],
                'cpf' => $dados['cpf'],
                'password' => Hash::make($dados['password']),
                'eh_gerente' => $dados['eh_gerente'],
            ]);
            return redirect("listaFuncionarios");
        } catch(ValidationException $exception) {
            return redirect('cadastrarFuncionario')->withErrors($exception->getValidator())->withInput();
        }
    }
}
