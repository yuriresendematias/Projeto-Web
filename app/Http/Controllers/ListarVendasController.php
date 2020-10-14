<?php

namespace App\Http\Controllers;

use App\Models\Venda;

class ListarVendasController extends Controller
{
    public function listar() {
        $vendas = Venda::orderby('created_at')->paginate(10);
        return view('listaVendas', ['vendas' => $vendas]);
    }
}
