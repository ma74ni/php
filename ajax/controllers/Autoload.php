<?php
class Autoload{

    function __construct(){
        spl_autoload_register(function($class_name){
            $controllers_path = './controllers/' . $class_name . '.php';
            $models_path = './models/' . $class_name . '.php';

            $method = isset($_GET['m']) ? $_GET['m'] : '';

            if(file_exists($controllers_path)){
                require_once($controllers_path);
                
                $controller = new $class_name();
                
                if($method != ''){
                    if(method_exists($controller, $method)){
                        $controller -> {$method}();
                    }else{
                        echo 'No existe el método';
                    }
                }
            }
            if(file_exists($models_path)){
                require_once($models_path);
            }
        });
    }
}