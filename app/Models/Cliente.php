<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function endereco(){
        return $this->hasOne('App\Models\Endereco');
    }
    public function vendas(){
        return $this->hasMany('App\Models\Venda');
    }
}
