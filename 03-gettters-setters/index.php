<?php
    require './Personnage.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get set</title>
</head>
<body>
    <h1>Getter et setter</h1>
    <p>on va créer des persos</p>

    <?php
        $joueur1 = new Personnage("Humain", "Luc", 0);
        $joueur2 = new Personnage("Orc", "Jon", 'saucisse');
        $joueur3 = new Personnage("Saucisse", "u", 12);
        $joueur4 = new Personnage("gobelin", "Jon", "sale");
        $joueur5 = new Personnage("Orc", "Youssef", "oui");
        echo $joueur1->isAlive();
        echo "<br>";
        echo $joueur2->isAlive();
        echo "<br>";
        echo "<p>joueur1 a {$joueur1->getPointDeVie()} points de vie";
        
        var_dump($joueur1, $joueur2, $joueur3, $joueur4, $joueur5);
    ?>
</body>
</html>