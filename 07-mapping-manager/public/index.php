<?php 

session_start();

require_once "../configuration/config.php";

spl_autoload_register(function($classname){
    $file = '../model/' . str_replace('\\', '/' , $classname) . 'php';
    if(file_exists($file)){

        require_once $file;
    }
});

?>
