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
    $pdo = new PDO(
        DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_USER, DB_PWD,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (Exception $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit;
}

require_once '../controller/publicController.php';

// $pdo = null;