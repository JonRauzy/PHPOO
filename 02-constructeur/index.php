<?php 
    require './MaDeuxiemeClass.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSTRUCTEUR</title>
</head>
<body>
    <h1>le constructeurp</h1>
    <p>le constructeur est uné méthode publique appelée automatiquement lors de l'instanciation d'une class. Elle permet de passer des paramètres () à notre instance de class.  </p>
    <p>public function __construct($argument){}</p>


    <?php
    
    // on passe 2 paramètres au constructeur de la classe, ce qui va donner les valeures aux attributs avec le $this->attribut
    $class1 = new MaDeuxiemeClass("oui", "non");
    $class2 = new MaDeuxiemeClass("lele", "lala");

    // ça marche pas lol
    // $class1-> premierAttribut = "oui"; 

    // ça non plus ça marche pas lol
    // echo MaDeuxiemeClass::PREMIERE_CONSTANTE;


    var_dump($class1, $class2);
    ?>



</body>
</html>