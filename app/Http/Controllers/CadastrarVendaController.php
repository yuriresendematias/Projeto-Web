<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class CadastrarVendaController extends Controller
{
    public function adicionarItem(Request $request){
        dd($request);
    }

    public function criar(){
        $produtos = Produto::orderby('nome')->paginate(5);
        return view('cadastroVenda', ['produtos' => $produtos]);
    }

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
