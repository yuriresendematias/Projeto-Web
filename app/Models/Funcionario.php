<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Funcionario extends Authenticatable
{
    use HasFactory;
    public function vendas(){
        return $this->hasMany('App\Models\Venda');
    }

    protected $fillable = ['nome', 'cpf', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    public static $rules = [
        'nome' => 'required|min:5|max:100',
        'cpf' => 'required|size:11',
        'email' => 'required|email:rfc',
        'password' => 'required|string|min:8|confirmed',
    ];

    public static $messages = [
        'nome.*' => 'Nome é obrigatório e deve ter entre 5 e 100 caracteres',
        'cpf.*' => 'CPF inválido',
        'email.*' => 'E-mail é inválido',
        'password.*' => 'Senha e obrigatorio e deve ter pelo menos 8 caracteres',
    ];
}
