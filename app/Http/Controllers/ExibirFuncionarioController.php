<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class ExibirFuncionarioController extends Controller
{
    public function exibir($id){
        $funcionario = Funcionario::find($id);

        return view('exibirFuncionario')->with(['funcionario'=>$funcionario]);
    }
}
