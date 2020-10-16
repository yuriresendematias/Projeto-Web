<?php

namespace Tests\Unit;

use App\Models\Cliente;
use App\Models\Funcionario;
use Tests\TestCase;
use App\Models\Venda;
use App\Validator\VendaValidator;
use App\Validator\ValidationException;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VendaValidatorTest extends TestCase
{
    use RefreshDatabase;


    public function testVendaSemProduto()
    {   
        $this->expectException(ValidationException::class);
        $venda = Venda::factory()->make();
        $venda->total = 0;
        VendaValidator::validate($venda->toArray());        
    }

    public function testVendaSemCliente()
    {   
        $this->expectException(ValidationException::class);
        $venda = Venda::factory()->make();
        $venda->cliente_id = null;
        VendaValidator::validate($venda->toArray());        
    }

    public function testVendaValida()
    {   
        $venda = Venda::factory()->make();
        VendaValidator::validate($venda->toArray()); 
        $this->assertTrue(true);       
    }

}
