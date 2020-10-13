<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Venda;

class DeletarClienteController extends Controller
{
    public function deletar($id){
        $cliente = Cliente::findOrFail($id);
        $endereco = Cliente::with('endereco')->findOrFail($id)->endereco;
        return view('/deletarCliente', ['cliente' => $cliente, 'endereco' => $endereco]);
    }

    public function excluir($id) {
        $enderecos = Endereco::where('cliente_id', '=', $id)->get();
        foreach($enderecos as $endereco) {
            $endereco->delete();
        }
        $vendas = Venda::where('cliente_id', '=', $id)->get();
        foreach($vendas as $venda) {
            $venda->delete();
        }
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect('/listaClientes');
    }
}
