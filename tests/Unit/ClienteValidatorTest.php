<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Cliente;
use App\Validator\ValidationException;
use App\Validator\ClienteValidator;

class ClienteValidatorTest extends TestCase
{
    public function testClienteSemNome()
    {
        $this->expectException(ValidationException::class);
        $cliente = Cliente::factory(1)->create(['nome' => '']);
        ClienteValidator::validate($cliente->toArray());
    }
}
