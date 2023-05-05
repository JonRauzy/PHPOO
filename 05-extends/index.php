<?php 
    require 'Personnage.php';
    require 'MagePersonnage.php';
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
    <h2>extend : les mages</h2>
    <p>On va créer un perso avec un formulaire man</p>
    
    <form action="" method="POST">
        <h2>Normal : </h2>
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

        <h2>Mages : </h2>
        <input type="text" name="nomM" id="nomM" placeholder="Nom" minlength="3" maxlength="18" required ><br>
        <label for="typeM" id="typeM">Type</label><br>
        <select name="typeM" id="typeM">
            <?php
                foreach(Personnage::ARRAY_TYPE as $type){
                    echo "<option value='$type'>$type</option>";
                }
            ?>
        </select><br>
        <label for="genreM" id="genreM" name="genreM">Genre</label><br>
        <select name="genreM" id="genreM">
            <?php
                foreach(Personnage::ARRAY_GENRE as $genre){
                    echo "<option value='$genre'>$genre</option>";
                }
            ?>
        </select>
        <input type="submit">
    </form>
    <?php      
        if(isset($_POST['nom'],$_POST['type'], $_POST['genre'])){
            $perso = new Personnage($_POST['nom'], $_POST['type'], $_POST['genre']);
            $mage = new MagePersonnage($_POST['nomM'], $_POST['typeM'], $_POST['genreM']);
        }
        var_dump($_POST,$perso, $mage);
    ?>

</body>
</html>