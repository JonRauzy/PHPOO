<?php

use model\Theuser;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilise moi</title>
</head>
<body>
    <h1></h1>
    <?php
    require "include/menu.php";
    ?>

    <?php
            
        $user1 = new Theuser([]);
        $user2 = new Theuser(['idTheUser'=>3, 'loginTheUser'=> "saucisse", 'pwdTheUser'=>'lolololo', 'mailTheUser'=>'info@bite.com']);

        var_dump($user1, $user2);

    ?>
</body>
</html>