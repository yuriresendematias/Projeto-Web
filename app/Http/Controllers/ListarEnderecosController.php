<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Endereco;

class ListarEnderecosController extends Controller
{
    public function listar() {
        $enderecos = DB::select("select * from enderecos");
        return view('listaEnderecos', ['enderecos' => $enderecos]);
    }
}
