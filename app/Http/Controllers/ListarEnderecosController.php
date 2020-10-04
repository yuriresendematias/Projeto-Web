<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Endereco;

class ListarEnderecosController extends Controller
{
    public function listar() {
        $enderecos = Endereco::all();
        return view('listaEnderecos', ['enderecos' => $enderecos]);
    }
}
