<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Venda;
use App\Models\ProdutosVenda;
use \App\Validator\VendaValidator;
use \App\Validator\ProdutosVendaValidator;
use Illuminate\Support\Facades\Auth;


class CadastrarVendaController extends Controller
{
    private $produtos_all;
    private $clientes;

    public function __construct()
    {
        $this->produtos_all = Produto::where('quantidade', '>', 0)->orderby('nome');
        $this->clientes = Cliente::orderby('nome');
    }

    /** 
     *  Inicia a posição 'itens' na session
     *   e retorna a view de cadastrar nova venda
     */
    public function criar(Request $request){        
        if(!$request->session()->has('itens')){
            $request->session()->put('itens', array());
        }
        
        return view('cadastroVenda')->with(['produtos' => $this->produtos_all->get(), 'clientes'=>$this->clientes->get()]);
    }

    /**
     * retorna o valor total de um venda
     */
    private function total_compra(){
        $total = 0;
        if(Session::get('itens')){
            foreach (Session::get('itens') as $item) {
                $total += $item['preco'];
            }
            return $total;
        }else
        return 0;
    }

    /**
     * Efettua uma venda, cadastrarndo uma venda no banco de dados e
     * retirando do estoque, cada produto que foi vendido
     */
    public function cadastrar(Request $request){
        $id = Auth::id(); 
        $venda_id = null;
        
        $fiado = false;

        if($request->fiado == 'on'){
            $fiado = true;
        }
        $dados = [  'total' => $this->total_compra(), 
                    'fiado' => $fiado, 
                    'funcionario_id'=>$id, 
                    'cliente_id' => $request->cliente_id];

                    

        try{
            VendaValidator::validate($dados);
            $venda = Venda::create($dados);
            $venda_id = $venda->id;
            $sessao = $request->session()->get('itens');
            
            foreach ($sessao as $key => $item) {
                $produto = Produto::find($key);
                $dados_itens = ['produto_id'=> $key,
                                'quantidade'=> $item['quantidade'],
                                'venda_id' => $venda->id];
               
                if($produto->quantidade < $item['quantidade']){        //verifica se tem produto suficiente no estoque
                    $dados_itens['quantidade'] = 0;                    
                }
                
                ProdutosVendaValidator::validate($dados_itens);       
                ProdutosVenda::create($dados_itens);
            }

            foreach(ProdutosVenda::where('venda_id', $venda->id )->get() as $p){            //retira a quantidade solicitada do estoque
                $produto = Produto::find($p->produto_id);                                   
                $produto->quantidade -= $sessao[$p->produto_id]['quantidade'];
                $produto->save();
            }

            return redirect("/listaVendas");

        }catch(\App\Validator\ValidationException $exception){
            //se o erro foi na validação da venda, não é necessario fazer nada
            //caso seja na validação de ProdutosVenda,
            //então é necessário destruir a venda e os ProdutosVenda criados
            if($venda_id){
                dd($venda);
                ProdutosVenda::where('venda_id', $venda_id )->delete(); 
                Venda::destroy($venda_id);
            }
            return redirect('cadastrarVenda')->withErrors($exception->getValidator())->withInput();
        }
    }
}
