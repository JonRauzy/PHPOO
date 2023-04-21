<?php
    // chargement des dépendances
    require './MaPremiereClass.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre première classe</title>
</head>
<body>
    <h1>Notre première classe : </h1>
    <p>On la nomme en pascal (UpperCamelCase) : MaPremiereClass</p>
    <h4>Important, on nomme le fichier la contenant du même nom que la classe</h4>

    <h2>Instanciation</h2>
    <p>Pour instancier une classe, on va utiliser le mot clé new NomDeLaClasse()</p>

    <?php 
        $class1 = new MaPremierClass();
        $class2 = new MaPremierClass();
        $class3 = $class2; //$class3 pointe vers l'objet de la $class2 c'est un lien symbolique
        var_dump($class1, $class2, $class3);
    ?>

    <h3>Les propriétés visibles des attributs permettent de les lire et/ou de les écrire</h3>
    <p>Affichage et modification attributs public</p>
    <p>$instance -> nomDeLattribut = nouvelle valeures;</p>
    <p>echo $affichage -> nomDeLattribut;</p>

    <?php
        echo $class1 -> premierAttribut;
        $class1 -> premierAttribut = "coucou";
        echo $class1 -> premierAttribut;
        $class2 -> deuxiemeAttribut = 25;
        
        // on sait créer des attributs à la volée, c'est dangereux et inutiles, on peut bloquer cette fonctionalitée oui :
        // $class2->troisiemeAttribut = 50; 
        // je laisse en commentaire sinon VS donne un message d'erreur
    ?>

    <h2>Les premières constante</h2>
    <p>Pas défaut publique et ne peuvent être modifiées, doivent être donnée des valeures à la création</p>
    <p>echo className::CONSTANTE;</p>

    <?php
        //mauvaise pratique
        echo $class2::PREMIERE_CONSTANTE;

        echo "<br><br>";
        //bonne pratique (c'est parce que c'est la même dans toute les instance de class):
        echo MaPremierClass::PREMIERE_CONSTANTE;
    ?>

    <h2>Les méthodes</h2>
    <p>les méthodes publiques sont des actions qu'on peut utiliser en dehors de la classe ou des instances de class</p>

    <?php
        echo $class1->helloWorld();

        // ça ça marche pas avec une fonction public, il faudrait la mettre en static à la plce
        // echo MaPremierClass::helloWorld();
    ?>

    <?php
        var_dump($class1, $class2, $class3);
    ?>
</body>
</html>