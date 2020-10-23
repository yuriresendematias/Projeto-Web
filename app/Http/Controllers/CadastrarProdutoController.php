<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class CadastrarProdutoController extends Controller
{
    public function criar(){
        $this->authorize("cadastrar", \App\Models\Funcionario::class);

        return view('cadastroProduto');
    }

    public function cadastrar(Request $request){
        $this->authorize("cadastrar", \App\Models\Funcionario::class);

        try {
            \App\Validator\ProdutoValidator::validate($request->all());
            $dados = $request->all();
            \App\Models\Produto::create($dados);
            return redirect("/listaProdutos");
        } catch(\App\Validator\ValidationException $exception) {
            return redirect('cadastrarProduto')->withErrors($exception->getValidator())->withInput();
        }
    }
}
