<?php

namespace App\Validator;
use Illuminate\Support\Facades\Validator;
use \App\Models\Funcionario;

class FuncionarioValidator {
    public static function validate($data) {
        $validator = Validator::make($data, Funcionario::$rules, Funcionario::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação do Funcionário");
        }
        return $validator;
    }

    public static function validateUpdate($data) {
        $validator = Validator::make($data, Funcionario::$rules_update, Funcionario::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação do Funcionário");
        }
        return $validator;
    }
}
