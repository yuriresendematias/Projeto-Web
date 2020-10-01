<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarVendaController extends Controller
{
    public function cadastrar(Request $request){
        try {
            \App\Validator\VendaValidator::validate($request->all());
            $dados = $request->all();
            \App\Models\Venda::create($dados);
            return redirect("/listaVendas");
        } catch(\App\Validator\ValidationException $exception) {
            return redirect('cadastrarVenda')->withErrors($exception->getValidator())->withInput();
        }
    }
}
