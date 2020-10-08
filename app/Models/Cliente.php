<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    //use Notifiable;

    public function endereco(){
        return $this->hasOne('App\Models\Endereco')->onDelete('cascade');;
    }
    public function vendas(){
        return $this->hasMany('App\Models\Venda');
    }

    protected $fillable = ['nome', 'telefone', 'dataNascimento'];

    public static $rules = [
        'nome' => 'required|min:5|max:100',
        'telefone' => 'required|min:8|max:20',
        'dataNascimento' => ['required', 'date'],
    ];

    public static $messages = [
        'nome.*' => 'Nome é obrigatório e deve ter entre 5 e 100 caracteres',
        'telefone.*' => 'Telefone é obrigatório e deve ter entre 8 e 20 caracteres',
        'dataNascimento.*' => 'Data de Nascimento inválida',
    ];
}
