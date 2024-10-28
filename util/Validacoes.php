<?php

abstract class Validacoes {
    public static function validaCPF($cpf) {
        $cpf_repartida = str_split($cpf);

        $ok = true;
        $volta = 1;
        if(str_word_count($cpf) == 14){
            $ok = false;
        }else{
            foreach ($cpf_repartida as $char){
                switch ($volta) {
                    case 1: case 2: case 3: case 5: case 6: case 7: case 9: case 10: case 11: case 13: case 14:
                        if(!is_numeric($char)){
                            $ok = false;
                        }
                        break;
                    case 4: case 8:
                        if(!$char == "."){
                            $ok = false;
                        }
                        break;

                    case 12:
                        if(!$char == "-"){
                            $ok = false;
                        }
                        break;
                    default:
                        break;
                }
            }
        }
        return $ok;
    }
    public static function validaEmail($email) {
        $ok = true;
        if(!strpos($email, '@')){
            $ok = false;
        }
        if(!strpos($email, '.')){
            $ok = false;
        }
        return $ok;
    }
    public static function validaCelular($celular) {
        $celular_repartida = str_split($celular);

        $ok = true;
        $volta = 1;
        if(str_word_count($celular) == 14){
            $ok = false;
        }else{
            foreach ($celular_repartida as $char){
                switch ($volta) {
                    case 2: case 3: case 5: case 6: case 7: case 8: case 9: case 11: case 12: case 13: case 14:
                        if(!is_numeric($char)){
                            $ok = false;
                        }
                        break;
                    case 1:
                        if(!$char == "("){
                            $ok = false;
                        }
                        break;
                    case 4:
                        if(!$char == ")"){
                            $ok = false;
                        }
                        break;
                    case 10:
                        if(!$char == "-"){
                            $ok = false;
                        }
                        break;
                    default:
                        break;
                }
            }
        }
        return $ok;
    }
    public static function validaSenha($senha){
        $senha_repartida = str_split($senha);

        $word_count = 0;
        $special_count = 0;
        $num_count = 0;

        $words = 'abcdefghijklmnopqrstuvwxyz';
        $words = str_split($words);

        $special_caracteres = '!@#$%¨&*';
        $special_caracteres = str_split($special_caracteres);

        if (str_word_count($senha) < 6){
            return false;
        }else{
            foreach ($senha_repartida as $char){
                if (is_numeric($char)) {
                    $num_count += 1;
                }else{
                    foreach ($special_caracteres as $special_char){
                        if ($char == $special_char){
                            $special_count += 1;
                        }
                    }
                    foreach ($words as $word){
                        if ($char == $word){
                            $word_count += 1;
                        }
                    }
                }
            }
        }
        return $word_count >= 3 && $special_count >= 1 && $num_count >= 2;
    }




}