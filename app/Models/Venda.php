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
}
