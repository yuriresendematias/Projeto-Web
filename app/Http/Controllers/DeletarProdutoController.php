<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class DeletarProdutoController extends Controller
{
    public function deletar($id){
        $this->authorize("cadastrar", \App\Models\Funcionario::class);

        $produto = produto::findOrFail($id);
        return view('/deletarProduto', ['produto' => $produto]);
    }

    public function excluir($id) {
        $this->authorize("cadastrar", \App\Models\Funcionario::class);

        $produto = produto::findOrFail($id);
        $produto->update([
            'quantidade' => 0,
        ]);

        return redirect('/listaProdutos');
    }
}
