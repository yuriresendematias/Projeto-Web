<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    public function funcionario(){
        return $this->belongsTo('App\Models\Funcionario');
    }
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }

    public function produtos(){
        return $this->belongsToMany('App\Models\Produto');
    }

    protected $fillable = ['total', 'fiado', 'funcionario_id', 'cliente_id'];

    public static $rules = [
        'total' => 'required|gt:0',
        'fiado' => 'required|boolean',
        'funcionario_id' => 'required',
        'cliente_id' => 'required',
    ];

    public static $messages = [
        'total.*' => 'total é obrigatório e deve ser maior que 0',
        'fiado.*' => 'Fiado é obrigatório e deve ser booleano',
        'funcionario_id.*' => 'Funcionario deve estar relacionado a uma Venda',
        'cliente_id.*' => 'Cliente deve estar relacionado a uma Venda',
    ];
}
