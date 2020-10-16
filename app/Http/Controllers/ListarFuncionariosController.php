<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Funcionario;

class ListarFuncionariosController extends Controller
{
    public function listar() {
        $funcionarios = Funcionario::orderby('nome')->paginate(10);
        return view('listaFuncionarios', ['funcionarios' => $funcionarios]);
    }
}
