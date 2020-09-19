<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    public function funcionario(){
        return $this->belongsTo('projeto\Funcionario');
    }
    public function cliente(){
        return $this->belongsTo('projeto\Cliente');
    }
}
