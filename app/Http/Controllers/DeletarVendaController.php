<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\ProdutosVenda;
use App\Models\Venda;
use Illuminate\Http\Request;

class DeletarVendaController extends Controller
{
    public function deletar($id){
        $this->authorize("cadastrar", \App\Models\Funcionario::class);

        return view('deletarVenda')->with(['id'=> $id]);
    }

    public function excluir($id){
        $this->authorize("cadastrar", \App\Models\Funcionario::class);

        $venda = Venda::find($id);
        $lista_itens = ProdutosVenda::where('venda_id', '=', $id)->get();

        foreach ($lista_itens as $key => $item) {                           //retorna os itens para o estoque
            $produto = Produto::find($item->produto_id);
            $produto->quantidade += $item->quantidade;
            $produto->save();
            $item->delete();
        }

        $venda->delete();

        return redirect('/listaVendas');
    }
}
