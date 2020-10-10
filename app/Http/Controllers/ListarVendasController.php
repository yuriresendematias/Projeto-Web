<?php

namespace App\Http\Controllers;

use App\Models\Venda;

class ListarVendasController extends Controller
{
    public function listar() {
        $vendas = Venda::all();
        return view('listaVendas', ['vendas' => $vendas]);
    }
}
