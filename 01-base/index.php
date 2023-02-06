<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduction au PHP</h1>

    <?php
    // l'instruction echo permet d'afficger du text

    echo '<p class="toto"> hello PHP <p/>';
    echo "j'affiche un texte";
    echo 'avec j\'appostrophe  <br/>';


    //Les variables 
    $age = 23; //un entier (integrer)
    $monkeyEatBanana = true; //Booléen
    $price = 2.99; //réel (float)
    $city = 'Lille';
    $prenom = 'Fares';

    //Concaténation
    echo 'j\ai '.$age. 'ans et je vais à' .$city. '<br />';

    //Raccourci avec interpolation
    echo "La varaible \$price contien $price. On peut aussi faire {$price}. <br/>";

    echo '<h1>'.'Bonjour ' .$prenom.'</h1>';

    echo '<h1>'.'Bonjour ' .$prenom.'</h1>';

    ?>

    <h2><?php echo 'salut' ?></h2>

    

</body>
</html>