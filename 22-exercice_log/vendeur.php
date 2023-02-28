<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="
https://cdn.jsdelivr.net/npm/bootswatch@5.2.3/dist/lumen/bootstrap.min.css
" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    $content = file_get_contents('log.txt');

    $file = fopen('log.txt', 'r');
    if (filesize('log.txt') > 0) {
        $contente = fread($file, filesize('log.txt'));
    }
    $lines = array_filter(explode("\n", $contente));
    ?>

    <h2>Liste des ventes</h2>
    <?php foreach ($lines as $line) { ?>
        <li><?= $line; ?></li>
    <?php } ?>
    <a class="btn btn-primary" href="./index.php">Acheteur</a>
</body>

</html>