<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Funcionario;
use Tests\TestCase;

class FuncionarioTest extends TestCase
{
    public function testFuncionarioNaoLogadoNaoPodeVerAListaDeClietes()
    {
        $response = $this->get('/listaClientes')->assertRedirect('/login');
    }

    public function testFuncionarioLogadoPodeVerAListaDeClietes()
    {
        $funcionario = Funcionario::factory()->make();
        $funcionario->save();
        $funcionario = Funcionario::all()->first();
        $response = $this->actingAs($funcionario)->get('/listaClientes')->assertStatus(200);
    }

}
