<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Venda;

class ListarVendasController extends Controller
{
    public function listar() {
        $vendas = Venda::all();
        return view('listaVendas', ['vendas' => $vendas]);
    }
}
