<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Validator\FuncionarioValidator;
use App\Validator\ValidationException;
use Illuminate\Http\Request;

class EditarFuncionarioController extends Controller
{
    public function editar($id){
        $funcionario = Funcionario::find($id);
        return view('editarFuncionario')->with(['funcionario'=>$funcionario]);
    }

    public function atualizar(Request $request){
        try{
            $funcionario = Funcionario::find($request->id);
            $funcionario->nome = $request->nome;
            $funcionario->email = $request->email;
            $funcionario->cpf = $request->cpf;

            FuncionarioValidator::validateUpdate($request->all());



            $funcionario->save();
            return redirect("listaFuncionarios"); 
        }catch(ValidationException $exception) {
            return back()->withErrors($exception->getValidator())->withInput();
        }
        


    }
}
