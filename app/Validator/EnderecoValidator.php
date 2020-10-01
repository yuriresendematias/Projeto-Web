<?php

namespace App\Validator;

class EnderecoValidator {
    public static function validate($data) {
        $validator = \Validator::make($data, \App\Models\Endereco::$rules, \App\Models\Endereco::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação do Endereco");
        }
        return $validator;
    }
}
