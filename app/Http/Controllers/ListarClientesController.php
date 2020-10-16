<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Endereco;

class ListarClientesController extends Controller
{
    public function listar() {
        $clientes = Cliente::all();
        return view('listaClientes', ['clientes' => $clientes]);
    }

    public function exibir($id) {
        $cliente = Cliente::findOrFail($id);
        $endereco = Cliente::with('endereco')->findOrFail($id)->endereco;
        $vendas = Cliente::with('vendas')->findOrFail($id)->vendas;
        return view('exibirCliente', ['cliente' => $cliente, 'endereco' => $endereco, 'vendas' => $vendas]);
    }
}
