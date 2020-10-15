<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class EditarProdutoController extends Controller
{
    public function editar($id){
        $produto = Produto::findOrFail($id);
        return view('editarProduto', ['produto' => $produto]);
    }

    public function atualizar(Request $request, $id){
        try{
            \App\Validator\ProdutoValidator::validate($request->all());

            $produto= Produto::findOrFail($id);

            $produto->update([
                'nome' => $request->nome,
                'validade' => $request->validade,
                'quantidade' => $request->quantidade,
                'precoCompra' => $request->precoCompra,
                'precoVenda' => $request->precoVenda,
            ]);
            return view('exibirProduto', ['produto' => $produto]);
        } catch(\App\Validator\ValidationException $exception) {
            return back()->withErrors($exception->getValidator())->withInput();
        }
    }
}
