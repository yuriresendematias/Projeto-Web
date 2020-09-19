<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function endereco(){
        return $this->hasOne('projeto\Endereco');
    }
    public function vendas(){
        return $this->hasMany('projeto\Venda');
    }
}
