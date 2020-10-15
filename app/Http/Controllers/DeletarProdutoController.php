<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class DeletarProdutoController extends Controller
{
    public function deletar($id){
        $produto = produto::findOrFail($id);
        return view('/deletarProduto', ['produto' => $produto]);
    }

    public function excluir($id) {
        $produto = produto::findOrFail($id);
        $produto->delete();

        return redirect('/listaProdutos');
    }
}
