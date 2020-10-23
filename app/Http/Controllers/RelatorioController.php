<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\ProdutosVenda;
use App\Models\Produto;

class RelatorioController extends Controller
{
    public function filtrar() {
        return view('filtroRelatorio');
    }


    public function exibir(Request $request) {
        $vendas = Venda::all();
        $relatorio = array();
        $total = 0;
        $totalCompra = 0;

        foreach ($vendas as $venda){
            //Verifica se a data da venda está entre as datas passadas
            if(strtotime($venda->created_at) >= strtotime($request->inicio)
            && strtotime($venda->created_at) <= strtotime($request->fim)){
                array_push($relatorio, $venda);
                $total = $total + $venda->total;

                //Busca todos os produtos da venda para somar o valor de compra
                foreach(ProdutosVenda::where('venda_id', $venda->id )->get() as $p){
                    $produto = Produto::find($p->produto_id);
                    $totalCompra = $totalCompra + ($produto->precoCompra * $p->quantidade);
                }
            }
        }

        return view('relatorio', ['vendas' => $relatorio, 'total' => $total, 'totalCompra' => $totalCompra]);
    }
}
