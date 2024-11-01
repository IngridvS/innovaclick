<?php

define("Base_URL","http://localhost/innovaclick/");
define("DB_HOST","smpsistema.com.br");
define("DB_NOME","");
define("DB_USER","");
define("DB_PASS","");


spl_autoload_register(function($classe){

    if(file_exists('../app/controllers/'. $classe .'.php' )){
        require_once '../app/controllers/' . $classe .'.php';
    }

    if(file_exists('../app/models/'. $classe . '.php')){
        require_once '../app/models/' . $classe . '.php';
    }
    if(file_exists('../core/'. $classe .'.php')){
        require_once '../core/' . $classe .'.php';
        // var_dump($classe);
        
    }
});