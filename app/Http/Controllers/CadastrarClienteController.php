<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class CadastrarClienteController extends Controller
{

    public function criar(){
        return view('cadastroCliente');
    }

    public function cadastrar(Request $request){
        try {
            \App\Validator\ClienteValidator::validate($request->all());
            $dados = $request->all();
            \App\Models\Cliente::create($dados);
            return redirect("/listaClientes");
        } catch(\App\Validator\ValidationException $exception) {
            return redirect('cadastrarCliente')->withErrors($exception->getValidator())->withInput();
        }
    }
}
