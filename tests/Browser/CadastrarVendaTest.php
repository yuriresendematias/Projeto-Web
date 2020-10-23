<?php

namespace Tests\Browser;

use App\Models\Funcionario;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CadastrarVendaTest extends DuskTestCase
{
    public function testCadastrarVendaValida()
    {
        $funcionario = Funcionario::where('ativo', '=', true)->first();
        $this->browse(function ($browser) use ($funcionario) {
            $browser->visit('/login')
                    ->assertSee('Login')
                    ->type('email', $funcionario->email)
                    ->type('password', '12341234')
                    ->press('Login')
                    ->screenshot('dasboard')
                    ->visit('/cadastrarVenda')
                    ->assertSee('Nova Venda')
                    ->type('quantidade', 1)
                    //->pause(2000)
                    ->select('produto_id', 1)
                    //->pause(2000)
                    ->press('Adicionar')
                    //->pause(2000)                    
                    ->select('produto_id', 3)
                    ->select('cliente_id', 3)
                    ->press('Finalizar')
                    ->pause(2000)
                    ->assertPathIs('/listaVendas');
        });
    }

    public function testCadastrarVendaComQuantidadeDeItemInvalida()
    {
        $funcionario = Funcionario::where('ativo', '=', true)->first();
        $this->browse(function ($browser) use ($funcionario) {
            $browser->visit('/cadastrarVenda')
                    ->assertSee('Nova Venda')
                    ->type('quantidade', 0)
                    //->pause(2000)
                    ->select('produto_id', 1)
                    //->pause(2000)
                    ->press('Adicionar')
                    //->pause(2000)                    
                    ->select('produto_id', 3)
                    ->select('cliente_id', 3)
                    ->press('Finalizar')
                    //->pause(2000)
                    ->assertPathIs('/cadastrarVenda');
        });
    }
}
