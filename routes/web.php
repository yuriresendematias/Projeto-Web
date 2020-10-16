<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Http\Controllers\ListarClientesController as ListarClientes;
use App\Http\Controllers\CadastrarClienteController as CadastrarCliente;
use App\Http\Controllers\EditarClienteController as EditarCliente;
use App\Http\Controllers\DeletarClienteController as DeletarCliente;

use App\Models\Funcionario;
use App\Http\Controllers\ListarFuncionariosController as ListarFuncionarios;
use App\Http\Controllers\CadastrarFuncionarioController as CadastrarFuncionario;


use App\Models\Produto;
use App\Http\Controllers\ListarProdutosController as ListarProdutos;
use App\Http\Controllers\CadastrarProdutoController as CadastrarProduto;
use App\Http\Controllers\EditarProdutoController as EditarProduto;
use App\Http\Controllers\DeletarProdutoController as DeletarProduto;

use App\Models\Endereco;
use App\Http\Controllers\ListarEnderecosController as ListarEnderecos;
use App\Http\Controllers\CadastrarEnderecoController as CadastrarEndereco;

use App\Models\Venda;
use App\Http\Controllers\ListarVendasController as ListarVendas;
use App\Http\Controllers\CadastrarVendaController as CadastrarVenda;
use App\Http\Controllers\ExibirVendaController as ExibirVenda;
use App\Http\Controllers\ItensVendaController as ItensVenda;
use App\Http\Controllers\DeletarVendaController as DeletarVenda;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);



Route::middleware('auth')->group(function(){
    //Funcionário
    Route::get('/listaFuncionarios', [ListarFuncionarios::class, 'listar']);
    Route::get('/cadastrarFuncionario', [CadastrarFuncionario::class, 'criar']);
    Route::post('/cadastrarFuncionario', [CadastrarFuncionario::class, 'cadastrar']);

    //Cliente
    Route::get('/listaClientes', [ListarClientes::class, 'listar']);
    Route::get('/cliente/{id}', [ListarClientes::class, 'exibir']);
    Route::get('/cadastrarCliente', [CadastrarCliente::class, 'criar']);
    Route::post('/cadastrarCliente', [CadastrarCliente::class, 'cadastrar']);
    Route::get('/editarCliente/{id}', [EditarCliente::class, 'editar']);
    Route::post('/editarCliente/{id}', [EditarCliente::class, 'atualizar']);
    Route::get('/deletarCliente/{id}', [DeletarCliente::class, 'deletar']);
    Route::post('/deletarCliente/{id}', [DeletarCliente::class, 'excluir']);

    //Produto
    Route::get('/listaProdutos', [ListarProdutos::class, 'listar']);
    Route::get('/produto/{id}', [ListarProdutos::class, 'exibir']);
    Route::get('/cadastrarProduto', [CadastrarProduto::class, 'criar']);
    Route::post('/cadastrarProduto', [CadastrarProduto::class, 'cadastrar']);
    Route::get('/editarProduto/{id}', [EditarProduto::class, 'editar']);
    Route::post('/editarProduto/{id}', [EditarProduto::class, 'atualizar']);
    Route::get('/deletarProduto/{id}', [DeletarProduto::class, 'deletar']);
    Route::post('/deletarProduto/{id}', [DeletarProduto::class, 'excluir']);

    //Endereco
    Route::get('/listaEnderecos', [ListarEnderecos::class, 'listar']);
    Route::get('/cadastrarEndereco', [CadastrarEndereco::class, 'criar']);
    Route::post('/cadastrarEndereco', [CadastrarEndereco::class, 'cadastrar']);

    //Venda
    Route::get('/cadastrarVenda', [CadastrarVenda::class, 'criar'])->name('venda.cadastrar');
    Route::get('/listaVendas', [ListarVendas::class, 'listar']);
    Route::post('/cadastrarVenda', [CadastrarVenda::class, 'cadastrar']);
    Route::get('/exibirVenda/{venda_id}', [ExibirVenda::class, 'exibir'])->name('venda.exibir');
    Route::get('/cancelarVenda', [CadastrarVenda::class, 'cancelar'])->name('venda.cancelar');
    Route::get('/deletarVenda/{id}', [DeletarVenda::class, 'deletar'])->name('venda.deletar');
    Route::post('/deletarVenda/{id}', [DeletarVenda::class, 'excluir'])->name('venda.remover');

    //itens da venda
    Route::post('/adicionarItemVenda', [ItensVenda::class, 'adicionarItem']);
    Route::get('/editarItemVenda/{produto_id}', [ItensVenda::class, 'editarItem'])->name('item.editar');
    Route::post('/editarItemVenda/{produto_id}', [ItensVenda::class, 'atualizarItem'])->name('item.atualizar');
    Route::get('/excluirItemVenda/{produto_id}', [ItensVenda::class, 'removerItem'])->name('item.excluir');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
