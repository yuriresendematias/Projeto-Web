<?php

namespace App\Validator;
use Illuminate\Support\Facades\Validator;

class VendaValidator {
    public static function validate($data) {
        $validator = Validator::make($data, \App\Models\Venda::$rules, \App\Models\Venda::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação da Venda");
        }
        return $validator;
    }
}
