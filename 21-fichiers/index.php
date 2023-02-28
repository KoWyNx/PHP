<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichier</title>
</head>

<body>
    <?php
    //Pour ouvrir un fichier
    $file = fopen('log.txt', 'a+');

    //Pour écrire dans le fichier
    //fwrite($file, "salut Fiorella\nça va ?\n");
    fclose($file);

    //Ecrire dans le fichier avec un formulaire
    if(!empty($_POST)){
        $message = $_POST['message'];
        $date = date('Y-n-d H:i:s');
        file_put_contents('log.txt', "[$date] $message \n", FILE_APPEND);
    }


    //Pour lire le fichier 
    $file = fopen('log.txt', 'r');
    if(filesize('log.txt') > 0){
        $content = fread($file, filesize('log.txt'));
    }

    $content = fread($file, filesize('log.txt'));
    fclose($file);

    //Raccourci
    $content = file_get_contents('log.txt');

    //On récuoère chaque ligne dans un tableau sauf les lignes vides
    $lines = array_filter(explode("\n", $content));

    var_dump($lines);

    var_dump($file);
    var_dump($content);
    ?>

    <form action="" method="post">
        <input type="text" name="message">
        <button>Log</button>
    </form>

    <h2>Le fichier de log a été modifié le <?= date('d/m/Y à H:i:s', fileatime('log.txt')) ?></h2>   <!-- fileatime permet de savoir la modification du fichier en temps -->
  

    <ul>
        <?php foreach ($lines as $line) { ?>
            <li><?= $line; ?></li>
        <?php } ?>
    </ul>




</body>

</html>