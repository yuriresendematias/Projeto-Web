<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }

    protected $fillable = ['logradouro', 'numero', 'bairro', 'cidade', 'pontoReferencia', 'cliente_id'];

    public static $rules = [
        'logradouro' => 'required|min:5|max:100',
        'numero' => 'required|min:1|max:10',
        'bairro' => 'required|min:5|max:30',
        'cidade' => 'required|min:5|max:30',
        'pontoReferencia' => 'required|min:5|max:30',
        'cliente_id' => 'required',
    ];

    public static $messages = [
        'logradouro.*' => 'Logradouro é obrigatório e deve ter entre 5 e 100 caracteres',
        'numero.*' => 'Número é obrigatório e deve ter entre 1 e 10 caracteres',
        'bairro.*' => 'Bairro é obrigatório e deve ter entre 5 e 30 caracteres',
        'cidade.*' => 'Cidade é obrigatória e deve ter entre 5 e 30 caracteres',
        'pontoReferencia.*' => 'Ponto de Referência é obrigatório e deve ter entre 5 e 30 caracteres',
        'cliente_id.*' => 'Endereço deve estar relacionado a um Cliente',
    ];
}
