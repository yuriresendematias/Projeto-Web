<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Clientes;

class ListarClientesController extends Controller
{
    public function listar() {
        $clientes = DB::select("select * from clientes");
        return view('listaClientes', ['clientes' => $clientes]);
    }
}
