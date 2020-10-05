<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Funcionario;
use App\Validator\FuncionarioValidator;
use App\Validator\ValidationException;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FuncionarioTest extends TestCase
{
    use RefreshDatabase;

    public function testFuncionarioSemCpf(){
        $this->expectException(ValidationException::class);
        $funcionario = Funcionario::factory()->make();
        $dados = $funcionario->toArray();
        $dados['password'] = 'password';
        $dados['password_confirmation'] = 'password';
        $dados['cpf'] = '';
        FuncionarioValidator::validate($dados);
    }

    public function testFuncionarioComCpfInvalido(){
        $this->expectException(ValidationException::class);
        $funcionario = Funcionario::factory()->make();
        $dados = $funcionario->toArray();
        $dados['password'] = 'password';
        $dados['password_confirmation'] = 'password';
        $dados['cpf'] = '1234';
        FuncionarioValidator::validate($dados);
    }

    public function testFuncionarioValido(){
        $funcionario = Funcionario::factory()->make();
        $dados = $funcionario->toArray();
        $dados['password'] = 'password';
        $dados['password_confirmation'] = 'password';
        FuncionarioValidator::validate($dados);
        $this->assertTrue(true);
    }
}
