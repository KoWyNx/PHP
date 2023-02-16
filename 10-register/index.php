<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    //etape 1 - afficher le formulaire
    //etape 2 - recupere les infos du formulaire
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $errors = [];



    ?>
    <div class="max-w-lg mx-auto p-4">
        <h2 class="text-center my-4 text-3xl">formulaire d'inscription</h2>
        <?php
        //etape 3 -  verifier le formulaire
        if (!empty($_POST)) {

            if (empty($email)) {
                $errors['email'] = 'L\'email est obligatoire.';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'L\'email est invalide';
            }

            if (mb_strlen($password) < 8) {
                $errors['password'] = 'Le password doit faire 8 caracteres minimum';
            }

            // etape 4 - afficher un message de succes ou on affiche les erreurs
            if (empty($errors)) {
                // todo envoie du formulaire a la BDD
                echo "<div class='alert alert-success' role='alert'><i class='fa-sharp fa-solid fa-badge-check'></i> Merci, $email, vous etes bien inscrit !</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>";
                foreach ($errors as $error) {
                    echo "<p><i class='fa-solid fa-triangle-exclamation'></i> $error</p>";
                }
                echo "</div>";
            }
        }
        ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="email" class="block">Email</label>
                <input class="mt-1 rounded-lg w-full" type="text" name="email" id="email" value="<?= $email ?>">
            </div>
            <div>
                <label for="password" class="block">Password</label>
                <input class="mt-1 rounded-lg w-full <?= isset($errors['password']) ? 'border border-danger' : '' ?>"  type="password" name="password" id="password">
                <?php if(isset($errors['password'])) { ?>
                    <p class="text-red-600"><?= $errors['password']; ?></p>
                <?php } ?>
            </div>
            <?php


            ?>

            <button class=" mt-4 bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-800 duration-200">S'inscrire</button>
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>