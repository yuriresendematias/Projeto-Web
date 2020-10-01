<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    public function vendas(){
        return $this->hasMany('App\Models\Venda');
    }

    protected $fillable = ['nome', 'cpf', 'email'];

    public static $rules = [
        'nome' => 'required|min:5|max:100',
        'cpf' => 'required|size:11',
        'email' => ['required', 'email:rfc'],
    ];

    public static $messages = [
        'nome.*' => 'Nome é obrigatório e deve ter entre 5 e 100 caracteres',
        'cpf.*' => 'CPF inválido',
        'email.*' => 'E-mail é inválido',
    ];
}
