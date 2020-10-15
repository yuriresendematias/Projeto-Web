<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Cliente;

class ItensVendaController extends Controller
{
    private $produtos_all;
    private $clientes;

    public function __construct()
    {
        $this->produtos_all = Produto::where('quantidade', '>', 0)->orderby('nome');
        $this->clientes = Cliente::orderby('nome');
    }


    /** 
     * Adiciona um item na session
     * O item possui preco, nome e quantidade
     * Atualiza a lista de itens no pedido
     */
    public function adicionarItem(Request $request){
        $id = $request->produto_id;
        $p = Produto::find($id);
        $produtos = $request->session()->get('itens');

        if(array_key_exists($id, $produtos)) {
            $produtos[$id]['quantidade'] += $request->quantidade;     
            $produtos[$id]['preco'] = $produtos[$id]['quantidade'] * $p->precoVenda;  
        }else{
            $produtos[$id] = ['quantidade'=>$request->quantidade,
                              'preco' => $request->quantidade * $p->precoVenda,
                              'nome' => $p->nome];
        }      
        
        $request->session()->put('itens', $produtos);  

        return redirect('cadastrarVenda')->with(['produtos' => $this->produtos_all->get(), 'clientes'=>$this->clientes->get()]);
    }

    /**
     * Redireciona para a view de editar um item do pedido
     */
    public function editarItem($produto_id){
        return view('editarItemVenda')->with(['id'=>$produto_id]);
    }

    /**
     * Atualiza o preco e a quantidade de um item na session
     */
    public function atualizarItem(Request $request, $produto_id){
        $dados = $request->session()->get('itens');
        $preco = Produto::where('id', '=' , $produto_id)->first()->precoVenda;  //preço do item
        $dados[$produto_id]['quantidade'] = $request->quantidade;               //atualiza a quantidade na session
        $dados[$produto_id]['preco'] = $request->quantidade * $preco;           //atualiza o preco na session


        $request->session()->put('itens', $dados);
        return redirect('cadastrarVenda')->with(['produtos' => $this->produtos_all->get(), 'clientes'=>$this->clientes->get()]);
        
    }

    /**
     * Remove um item da session
     */
    public function removerItem(Request $request, $produto_id){
        if($request->session()->has('itens')) {
            $produtos = $request->session()->get('itens');
        }
       
        if(array_key_exists($produto_id, $produtos)) {
           unset($produtos[$produto_id]);
        } 
        $request->session()->put('itens', $produtos);
        
        return view('cadastroVenda')->with(['produtos' => $this->produtos_all->get(), 'clientes'=>$this->clientes->get()]); 

        dd($request->produto_id);
    }
}
