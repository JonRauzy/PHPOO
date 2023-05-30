<?php 

use model\Theuser;
use model\TheuserManager;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
</head>
<body>
    <h1></h1>
    <?php
    require "include/menu.php";
    ?>

    <h3>utilisateur dont l'id vaut 2 : </h3>

    <?php

    $user = new TheuserManager($pdo);
    var_dump($user);

    if(empty($theusers)){
        echo 'rien';
    }else{
        var_dump($theusers);
    }

    ?>
</body>
</html>