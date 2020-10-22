<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Funcionario;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginValido()
    {
        $funcionario = Funcionario::first();
        $this->browse(function ($browser) use ($funcionario) {
            $browser->visit('/')
                    ->screenshot('home')
                    ->visit('/login')
                    ->screenshot('login_')
                    ->assertSee('Login')
                    ->type('email', $funcionario->email)
                    ->type('password', '12341234')
                    ->screenshot('login')
                    ->press('Login')
                    ->screenshot('dasboard')
                    ->assertPathIs('/');

        });
    }
}
