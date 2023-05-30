<?php 

session_start();

require_once "../configuration/config.php";


spl_autoload_register(function($classname){
    $file = '../' . str_replace('\\', '/' , $classname) . '.php';

    if(file_exists($file)){
        require_once $file;
    }
});


try {
    $pdo = new PDO(DB_DRIVER.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset='.DB_CHARSET,DB_NAME,DB_PWD);
}catch(Exception $e){
    $e->getMessage();
}

require_once '../controller/publicController.php';

$pdo = null;