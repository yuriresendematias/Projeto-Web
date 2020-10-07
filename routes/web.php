<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Http\Controllers\ListarClientesController as ListarClientes;
use App\Http\Controllers\CadastrarClienteController as CadastrarCliente;

use App\Models\Funcionario;
use App\Http\Controllers\ListarFuncionariosController as ListarFuncionarios;
use App\Http\Controllers\CadastrarFuncionarioController as CadastrarFuncionario;


use App\Models\Produto;
use App\Http\Controllers\ListarProdutosController as ListarProdutos;
use App\Http\Controllers\CadastrarProdutoController as CadastrarProduto;

use App\Models\Endereco;
use App\Http\Controllers\ListarEnderecosController as ListarEnderecos;
use App\Http\Controllers\CadastrarEnderecoController as CadastrarEndereco;

use App\Models\Venda;
use App\Http\Controllers\ListarVendasController as ListarVendas;
use App\Http\Controllers\CadastrarVendaController as CadastrarVenda;

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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function(){
    //Funcionário
    Route::get('/listaFuncionarios', [ListarFuncionarios::class, 'listar']);
    Route::get('/cadastrarFuncionario', [CadastrarFuncionario::class, 'criar']);
    Route::post('/cadastrarFuncionario', [CadastrarFuncionario::class, 'cadastrar']);

    //Cliente
    Route::get('/listaClientes', [ListarClientes::class, 'listar']);
    Route::get('/cadastrarCliente', [CadastrarCliente::class, 'criar']);
    Route::post('/cadastrarCliente', [CadastrarCliente::class, 'cadastrar']);    

    //Produto
    Route::get('/listaProdutos', [ListarProdutos::class, 'listar']);
    Route::get('/cadastrarProduto', [CadastrarProduto::class, 'criar']);
    Route::post('/cadastrarProduto', [CadastrarProduto::class, 'cadastrar']);

    //Endereco
    Route::get('/listaEnderecos', [ListarEnderecos::class, 'listar']);
    Route::get('/cadastrarEndereco', [CadastrarEndereco::class, 'criar']);
    Route::post('/cadastrarEndereco', [CadastrarEndereco::class, 'cadastrar']);

   
});

//Venda
Route::get('/cadastrarVenda', [CadastrarVenda::class, 'criar']);
Route::get('/listaVendas', [ListarVendas::class, 'listar']);
Route::post('/cadastrarVenda', [CadastrarVenda::class, 'cadastrar']);
Route::post('/adicionarItemVenda', [CadastrarVenda::class], 'adicionarItem');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
