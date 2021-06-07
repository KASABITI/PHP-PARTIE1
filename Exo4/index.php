<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Partie1</title>
</head>
<body>
    <p>Exercise 4</p>
    <?php
    // Créez une variable age aléatoire. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge obtenu.
    $age = rand(0, 100);
    echo $age;

    if($age >= 18){
        echo 'Vous êtes majeur';
    }else {
        echo 'Vous êtes mineur';
    }
    ?>
</body>
</html>