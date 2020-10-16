<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class DeletarFuncionarioController extends Controller
{
    public function deletar($id){
        $funcionario = Funcionario::find($id);
        return view('deletarFuncionario')->with(['funcionario'=>$funcionario]) ;
    }

    public function excluir($id){
        
        return redirect('/listaFuncionarios');
    }
}
