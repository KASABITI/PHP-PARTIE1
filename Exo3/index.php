<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Partie1</title>
</head>
<body>
    <h1>Exercise 3 </h1>
    <?php
    // Créez une variable age. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge.
    
    $age = 0;
    if($age > 0){
        if($age >= 18){
            echo 'vous etes majeur';
        }else{
            echo 'Vous etes mineur';
        }
    }else{
        echo 'Veuillez entrer un age valide !!!';
    }
    ?>
</body>
</html>