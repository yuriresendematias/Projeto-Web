<?php

namespace App\Validator;
use Illuminate\Support\Facades\Validator;

class ProdutosVendaValidator {
    public static function validate($data) {
        $validator = Validator::make($data, \App\Models\ProdutosVenda::$rules, \App\Models\ProdutosVenda::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação da Venda");
        }
        return $validator;
    }

    public static function validate_add($data) {
        $validator = Validator::make($data, \App\Models\ProdutosVenda::$rules_add, \App\Models\ProdutosVenda::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro ao adicionar item");
        }
        return $validator;
    }
}