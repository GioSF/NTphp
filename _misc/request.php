<?php

class Request {
    
    //Pega o valor do vetor REQUEST na posiчуo $key
    public static function get($key) {
        
        //Verifica se a variavel existe e se ela nуo щ vazia
        //Se existe retorna o valor
        if (isset($_REQUEST[$key]) && ($_REQUEST[$key] != '')) {
            return $_REQUEST[$key];
        }
        else {
            return '';
        }
        
    }
    
    //Atribui para o vetor o valor desejado na posiчуo key
    public static function set($key, $val) {
        $_REQUEST[$key] = $val;
    }
}
