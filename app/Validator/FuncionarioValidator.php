<?php

namespace App\Validator;

class FuncionarioValidator {
    public static function validate($data) {
        $validator = \Validator::make($data, \App\Models\Funcionario::$rules, \App\Models\Funcionario::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação do Funcionário");
        }
        return $validator;
    }
}
