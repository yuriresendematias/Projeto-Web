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
            \App\Validator\EnderecoValidator::validate($request->all());

            $cliente = $request->all();
            $cliente = \App\Models\Cliente::create($cliente);
            $cliente_id = $cliente->id;

            $cliente->endereco()->create($request->all());

            return redirect("/listaClientes");
        } catch(\App\Validator\ValidationException $exception) {
            return redirect('cadastrarCliente')->withErrors($exception->getValidator())->withInput();
        }
    }
}
