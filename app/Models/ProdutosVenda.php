<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutosVenda extends Model
{
    use HasFactory;

    public function venda(){
        return $this->hasOne('App\Models\Venda');
    }

    public function funcionario(){
        return $this->hasOne('App\Models\Funcionario');
    }
    protected $fillable = ['produto_id', 'venda_id', 'quantidade'];

    public static $rules = [
        'quantidade' => 'required|gt:0',
        'produto_id' => 'required',
        'venda_id' => 'required',
    ];

    public static $rules_add = [
        'quantidade' => 'required|gt:0',
        'produto_id' => 'required',
    ];

    public static $messages = [
        'quantidade.*' => 'A quantidade do produto tem que ser pelo menos 1',
        'produto_id'   => 'Um funcionario deve esta vinculado a venda',
        'venda_id.*' => 'Uma venda tem tem que esta vinculada',
    ];
}
