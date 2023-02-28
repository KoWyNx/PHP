<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.2.3/dist/lumen/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    $content = file_get_contents('log.txt');


    if (!empty($_POST)) {
        $email = $_POST['email'];
        $produit = $_POST['produit'];
        $date = date('Y-n-d H:i:s');
        file_put_contents('log.txt', "[$date] $email $produit\n", FILE_APPEND);
    }

    $file = fopen('log.txt', 'r');
    if (filesize('log.txt') > 0) {
        $contente = fread($file, filesize('log.txt'));
    }

    $lines = array_filter(explode("\n", $contente));


    var_dump($content);


    ?>




    <form action="" method="post">
        <div class="mb-3">
            <label for="email" id="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>
        <select name="produit" class="form-select" aria-label="Default select example">
            <option selected>Article 1</option>
            <option>Article 2</option>
            <option>Article 3</option>
        </select>
        <button type="submit" class="btn btn-primary">Envoyer</button>


        <?php foreach ($lines as $line) { ?>
            <li><?= $line; ?></li>
        <?php } ?>
    </form>

    <a class="btn btn-primary" href="./vendeur.php">HTML</a>
</body>

</html>