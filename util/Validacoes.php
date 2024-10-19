<?php

abstract class Validacoes {
    public static function validaCPF($cpf) {
        $ok = true;
        $volta = 1;
        if(str_word_count($cpf) == 14){
            $ok = false;
        }else{
            foreach ($cpf as $char){
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
        $ok = true;
        $volta = 1;
        if(str_word_count($celular) == 14){
            $ok = false;
        }else{
            foreach ($cpf as $char){
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
}
/*(51)95555-5555
 * 
 */