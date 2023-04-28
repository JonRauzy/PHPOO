<?php 
    require 'Personnage.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bagarre</title>
</head>
<body>
    <h1>ils vont se battre</h1>
    <h2>Création d'un bonhomme</h2>
    <p>On va créer un perso avec un formulaire man</p>

    <form action="" method="POST">
        <input type="text" name="nom" id="nom" placeholder="Nom" minlength="3" maxlength="18" required ><br>
        <label for="type" id="type">Type</label><br>
        <select name="type" id="type">
            <?php
                foreach(Personnage::ARRAY_TYPE as $type){
                    echo "<option value='$type'>$type</option>";
                }
            ?>
        </select><br>
        <label for="genre" id="genre" name="genre">Genre</label><br>
        <select name="genre" id="genre">
            <?php
                foreach(Personnage::ARRAY_GENRE as $genre){
                echo "<option value='$genre'>$genre</option>";
                }
            ?>
        </select>
        <input type="submit">
    </form>
    <?php      
        var_dump($_POST)
    ?>

</body>
</html>