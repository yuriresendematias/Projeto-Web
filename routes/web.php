<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Http\Controllers\ListarClientesController as ListarClientes;
use App\Http\Controllers\CadastrarClienteController as CadastrarCliente;

use App\Models\Funcionario;
use App\Http\Controllers\ListarFuncionariosController as ListarFuncionarios;
use App\Http\Controllers\CadastrarFuncionarioController as CadastrarFuncionario;

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

//Cliente
//Route::get('/clientes', [Cliente::class, 'all']);
Route::get('/listaClientes', [ListarClientes::class, 'listar']);
Route::get('/cadastrarCliente', function (Request $request) {
    return view('cadastroCliente');
});
Route::post('/cadastrarCliente', [CadastrarCliente::class, 'cadastrar']);

//Funcionário
Route::get('/listaFuncionarios', [ListarFuncionarios::class, 'listar']);
Route::get('/cadastrarFuncionario', function (Request $request) {
    return view('cadastroFuncionario');
});
Route::post('/cadastrarFuncionario', [CadastrarFuncionario::class, 'cadastrar']);
