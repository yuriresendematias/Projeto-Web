<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class DeletarFuncionarioController extends Controller
{
    public function deletar($id){
        $this->authorize("cadastrar", \App\Models\Funcionario::class);

        $funcionario = Funcionario::find($id);
        return view('deletarFuncionario')->with(['funcionario'=>$funcionario]) ;
    }

    public function excluir($id){
        $this->authorize("cadastrar", \App\Models\Funcionario::class);

        $funcionario = Funcionario::find($id);
        $funcionario->ativo = false;
        
        return redirect('/listaFuncionarios');
    }
}
