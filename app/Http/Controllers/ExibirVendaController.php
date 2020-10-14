<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Produto;
use App\Models\ProdutosVenda;
use App\Models\Venda;
use Illuminate\Http\Request;

class ExibirVendaController extends Controller
{
    public function exibir($venda_id){
        $venda = Venda::find($venda_id);
        $cliente_nome = Cliente::find($venda->cliente_id)->nome;
        $venda_data = $venda->created_at;
        $vendedor = Funcionario::find($venda->funcionario_id)->nome;
        $lista_itens = ProdutosVenda::where('venda_id', '=', $venda->id)->get(); //retorna um ProdutoVenda (quantidade, produto_id e venda_id)
        $itens = array();

        if(!$venda->fiado)
            $venda_pago = 'Sim';
        else
            $venda_pago = 'Não';

        foreach($lista_itens as $k => $item){
            $p = Produto::find($item->produto_id);
            $itens[$k] = ['quantidade' => $item->quantidade, 
                          'nome' => $p->nome, 
                          'preco' => $item->quantidade * $p->precoVenda];
        }


        return view('exibirVenda')->with(['cliente_nome'=>$cliente_nome,
                                         'venda_data' => $venda_data,
                                         'vendedor' => $vendedor,
                                         'venda_pago' => $venda_pago,
                                         'itens' => $itens]);
    }
}
