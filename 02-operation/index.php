<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $number1 = 3;
    $number2 = 4;
    $number3 = 5;

    $result1 = $number1 + $number2;

    
    ?>

<p>3 + 4 =  <?php echo  $result1 ?></p>
<p>4 * 5 =  <?php echo  $number2 * $number3 ?></p>
<p>5 / 3 =  <?php echo  round($number3 / $number1, 2)  ?></p>
<p>2 <sup>3</sup> = <?= 2 ** $number1 ?></p>

<h2>Opérateurs d'incrémentation</h2>
<p>result1 +3 = <?= $result1 +=3; ?></p>
<p>result1 +1 = <?= $result1++ ?></p>
<p><?php echo $result1 ?></p>

<p>
    <?php 
        $sentence = 'Hello';
        $sentence .= 'Fiorella'; //Le .= permet de récupérer la valeur d'avant
        echo $sentence;
    ?>
</p>

<h2>Comparaisons en PHP</h2>
<p>Ect-ce que number1 est trictement égal à 3 ? <?php echo var_dump ($number1 === 3 )?></p>
<p>Ect-ce que number1 est égal à 3 ? <?php echo var_dump ($number1 == 3 )?></p>
<p>Ect-ce que number1 est égal à 12 ? <?php echo var_dump ($number1 === 12 )?></p>


<h2>Condition en PHP</h2>
<?php
$date = 6;

//Si la date +1 vaut 7 alors on a coaching

if($date +1 === 7){
    echo 'On a coaching';
}else {
    echo 'on a PHP';
}

echo '<br />';
//Bien sur, on peut faire des ternaires
echo ($date + 1 === 7 ) ? 'On a coaching en ternaire' : 'On a PHP en ternaires';


?>

<?php if($date + 1 ===7){ ?>
    <h3>On a coaching</h3>
<?php } else {?>
    <h1>On a PHP</h1>
<?php } ?>


</body>
</html>