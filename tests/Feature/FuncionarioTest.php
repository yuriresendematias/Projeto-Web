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
        $this->get('/listaClientes')->assertStatus(403);
    }

    public function testFuncionarioLogadoPodeVerAListaDeClietes()
    {
        $funcionario = Funcionario::factory()->make();
        $funcionario->ativo = true;
        $funcionario->save();
        $response = $this->actingAs($funcionario)->get('/listaClientes')->assertStatus(200);
    }

}
