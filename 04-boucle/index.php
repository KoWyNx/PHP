<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h2>La boucle for</h2>

    <ul>
<?php 
for($i = 0; $i<10; $i++){
    echo "<li>$i</li>";
}
?>
</ul>
<h2>La boucle for each</h2>

<?php 
    //$letters = array('A', 'B', 'C') //syntaxe 2000
    $firstnames = ['Fiorella', 'Marina', 'Matthieu'];
    

    var_dump($firstnames);  //Debug du tableau

    //On peut parcourir un tableau
    foreach($firstnames as $index => $value){
        echo "<h3>$value ($index)</h3>";
    }

?>

<h2>La boucle while</h2>

<?php 
 $i = rand(0,10);
 while($i < 10){
    echo $i++;
 }


?>

<h2>La boucle do while</h2>
<?php 

$i = rand(0,10);
do{
   echo $i++;
}while($i < 10)
?>

<h2>Exercice 10 à 1</h2>

<ul>
<?php 
for($i = 10; $i >= 1; $i--){
    echo "<li>$i</li>";
}
?>
</ul>

<h2>Exercice modulo</h2>


<ul>
<?php 
for($i=0; $i < 101; $i++){
    if($i % 2 === 0){
        echo "<li>$i</li>";
    }
    
}
?>
</ul>

<h2>Exercice PGCD</h2>

<?php 
 $a = rand(1, 100); //96
 $b = rand(1, 100); //36

 echo "Le PGCD de $a et $b est ";

 while($a!=$b){
    if($a > $b){
        $a = $a -$b;
    }else{
        $b = $b - $a;
    }
 }



?>


<h2>Exercice FIZZ/BUZZ</h2>

<?php 
for($i=1; $i < 101; $i++){
    if($i % 15 === 0){
        echo "<li>fizz/buzz</li>";
    }else if($i % 5 === 0){
        echo "<li>buzz</li>";
    }else if($i % 3 === 0){
        echo "<li>fizz</li>";
    }else{
        echo "<li>$i</li>";
    }
    
}
?>

<h2>tableau carré number</h2>

<?php 
for($e = 0; $e<=9; $e++){
    echo "<p>";
for($i = 0; $i <= $e; $i++){
    echo "<span>🍕</span>";
}echo "</p>";}


?>

<h2>Table de multiplication</h2>

<?php 


for($i = 0; $i <= 10; $i++){
    $resultat = 5 * $i;
 echo "<ul>5 x $i = $resultat</ul>";
}

?>

<h2>Multiplication 1 à 10</h2>

<?php 
echo "<div class='flex'>";
for($e =1; $e <=10;$e++ ){
    echo "<div class='end'>";
for($i = 0; $i <= 10; $i++){
    $resultat = $e * $i;
 echo "<div>$e x $i = $resultat</div>";
}echo "</div>";}
echo "</div>";
?>




<h2>Multiplication table</h2>
    <table class="demo">
        <thead>
            <tr>
                <th>x</th>
                <?php for ($i = 0; $i <= 10; $i++) {
                    echo '<th>' . $i . '</th>';
                } ?>

            </tr>
        </thead>
        <tbody>
            <?php

            for ($e = 0; $e <= 10; $e++) {
                echo '<tr>';
                echo '<th>' . $e . '</th>';

                for ($i = 0; $i <= 10; $i++) {
                    if ($e === $i)  echo '<td class="diag"> ' . ($e * $i) . ' </td>';
                    else if (($i+$e) % 2 === 0) echo '<td class="paire"> ' . ($e * $i) . ' </td>';
                    else echo '<td> ' . ($e * $i) . ' </td>';
                }

                echo '</tr>';
            }

            ?>


        </tbody>
    </table>

</body>
</html>