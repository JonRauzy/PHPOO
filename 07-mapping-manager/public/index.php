<?php 

session_start();

require_once "../config/config.php";

spl_autoload_register(function($classname){
    $file = '../model/' . str_replace('\\', $classname) . 'php';
    require_once $file;
});

