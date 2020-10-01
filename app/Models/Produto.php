<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    public function vendas(){
        return $this->belongsToMany('App\Models\Venda');
    }

    protected $fillable = ['nome', 'quantidade', 'validade', 'precoCompra', 'precoVenda'];

    public static $rules = [
        'nome' => 'required|min:5|max:100',
        'quantidade' => 'required|gte:1',
        'validade' => ['required', 'date'],
        'precoCompra' => 'required|gt:0',
        'precoVenda' => 'required|gt:0',
    ];

    public static $messages = [
        'nome.*' => 'Nome é obrigatório e deve ter entre 5 e 20 caracteres',
        'quantidade.*' => 'quantidade é obrigatório e deve ter mais de 1',
        'validade.*' => 'Validade inválida',
        'precoCompra.*' => 'Preço de compra inválido',
        'precoVenda.*' => 'Preço de venda inválido',
    ];
}
