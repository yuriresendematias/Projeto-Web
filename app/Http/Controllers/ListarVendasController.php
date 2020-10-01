<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Venda;

class ListarVendasController extends Controller
{
    public function listar() {
        $vendas = DB::select("select * from vendas");
        return view('listaVendas', ['vendas' => $vendas]);
    }
}
