<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
</head>
<body>



<div class="board">
<img class="bart" src="https://innate-gerbil-c60.notion.site/image/https%3A%2F%2Fs3-us-west-2.amazonaws.com%2Fsecure.notion-static.com%2F2ac3b58b-3fa6-4c52-916e-6a97cbd615dd%2Fbart.png?id=0c2b8520-d93e-4dce-8f41-74cffcbdca4b&table=block&spaceId=0907aa8a-c789-4509-997b-a768e12612c0&width=2000&userId=&cache=v2" alt="">

<?php 

    $newText = ["recopier la nouvelle phrase", "supprimer la nouvelle phrase", "écrit ta propre phrase"];

    $randome = rand(0, 2);
    $numberRepeat = $_GET["numberRepeat"] ?? 10;
    for($i=0; $i < $numberRepeat; $i++){
        echo '<div class="test">' .$newText[$randome]. '</div>';
    }

    
    
?>

</div>


<div class="formulaire">
    <form method="get" action="index.php">
        <input class="input" type="number" name="numberRepeat">
        <input type="submit" value="Envoyer">
</form>
</div>



    
</body>
</html>