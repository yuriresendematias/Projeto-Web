<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Funcionario;

class ListarFuncionariosController extends Controller
{
    public function listar() {
        $funcionarios = Funcionario::all();
        return view('listaFuncionarios', ['funcionarios' => $funcionarios]);
    }
}
