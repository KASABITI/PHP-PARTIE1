<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP-Partie1</title>
</head>
<body>
    <h1>Exercise 5</h1>
    <?php

    // Créez une variable âge et une variable genre. Afficher aléatoirement vous êtes une femme et vous avez xans ou vous êtes un homme et vous avez xans.
    
    $age = rand(0,100);
    $sex = array('homme', 'femme');
    $genre = $sex[ rand(0,1)];
    $result = $age . '' . $genre;
    echo $result;

    if($age > 0 && ($genre == 'femme' || $genre = 'homme')){
        if($age >= 18 && $genre == 'femme'){
            echo 'Vous êtes une femme et vous etes majeure';

        }elseif($age < 18 && $genre == 'femme'){
            echo 'Vous êtes une femme et vous etes mineure';

        }elseif($age >= 18 && $genre == 'homme'){
            echo 'Vous êtes une femme et vous etes majeure';
        }
    }else{
        echo 'Veuillez rentrer des infos valides';
    }elseif ($age < 18 && $genre == 'homme'){
        echo 'Vous êtes une femme et vous etes mineure';
    }
    ?>
</body>
</html>