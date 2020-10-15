<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;

class ListarProdutosController extends Controller
{
    public function listar() {
        $produtos = Produto::orderby('created_at')->paginate(15);
        return view('listaProdutos', ['produtos' => $produtos]);
    }

    public function exibir($id) {
        $produto = Produto::findOrFail($id);
        return view('exibirProduto', ['produto' => $produto]);
    }
}
