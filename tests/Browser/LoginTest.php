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
    public function testExample()
    {
        $funcionario = Funcionario::first();

        $this->browse(function (Browser $browser) use ($funcionario) {
            $browser->visit('/login')
                    //->type('email', $funcionario->email)
                    //->type('password', '123411234')
                    ->pause(200)
                    //->press('LOGIN')
                    ->assertSee('Login')
                    ->pause(200);

        });
    }
}
