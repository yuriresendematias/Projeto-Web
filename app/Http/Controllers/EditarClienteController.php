<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class EditarClienteController extends Controller
{
    public function editar($id){
        $cliente = Cliente::findOrFail($id);
        $endereco = Cliente::with('endereco')->findOrFail($id)->endereco;
        return view('editarCliente', ['cliente' => $cliente, 'endereco' => $endereco]);
    }

    public function atualizar(Request $request, $id){
        try{
            \App\Validator\ClienteValidator::validate($request->all());
            \App\Validator\EnderecoValidator::validate($request->all());

            $cliente= Cliente::findOrFail($id);
            $endereco = Cliente::with('endereco')->findOrFail($id)->endereco;

            $cliente->update([
                'nome' => $request->nome,
                'telefone' => $request->telefone,
                'dataNascimento' => $request->dataNascimento,
            ]);
            $endereco->update([
                'logradouro' => $request->logradouro,
                'numero' => $request->numero,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'pontoReferencia' => $request->pontoReferencia,
            ]);
            return view('exibirCliente', ['cliente' => $cliente, 'endereco' => $endereco]);
        } catch(\App\Validator\ValidationException $exception) {
            return back()->withErrors($exception->getValidator())->withInput();
        }
    }
}
