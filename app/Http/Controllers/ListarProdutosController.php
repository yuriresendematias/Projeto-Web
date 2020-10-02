<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;

class ListarProdutosController extends Controller
{
    public function listar() {
        $produtos = Produto::all();
        return view('listaProdutos', ['produtos' => $produtos]);
    }
}
