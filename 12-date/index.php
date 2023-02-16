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


echo date('d/m/Y '); 
echo date('H\h i\m s\s'); 


?>

<?php 
        $time = date('Y-m-d',time());
        $now = date_create($time);
        $target = date_create('2023-12-25');
        $interval = date_diff($now, $target);    
    ?>

    <p>Avant Noël il reste : <?= $interval->format('%a jours') ?></p>
</body>
</html>