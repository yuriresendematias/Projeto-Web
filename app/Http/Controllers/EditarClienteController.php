<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class EditarClienteController extends Controller
{
    public function editar($id){
        $cliente = Cliente::findOrFail($id);
        return view('editarCliente', ['cliente' => $cliente]);
    }

    public function atualizar(Request $request, $id){
        $cliente= Cliente::findOrFail($id);

        $cliente->update([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'dataNascimento' => $request->dataNascimento,
        ]);
        return view('exibirCliente', ['cliente' => $cliente]);
    }
}
