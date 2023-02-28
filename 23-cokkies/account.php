<?php

session_start();

if(isset($_COOKIE['remember'])){
    $_SESSION['nickname'] = $_COOKIE['remember'];
    // s'il y a un cookie, on va vérifier s'il est présent dans le fichier token
    touch('tokens.txt');
    $tokens = array_filter(explode("\n", file_get_contents('tokens.txt')));

    // le & permet de modifier DIRECTEMENT le tableau (par référence)
    foreach($tokens as $token){ //toto:$2y$10$1A41x.zsLsnnKNMoNgN4sehzgzVC.ozY0SwMgSN6exK3lAb6LJkxG
        $token = explode(':', $token, 2); //['toto:$2y$10$1A41x.zsLsnnKNMoNgN4sehzgzVC.ozY0SwMgSN6exK3lAb6LJkxG']

        if($token[1] === $_COOKIE['remember']){
            $_SESSION['nickname'] = $_COOKIE['remember'];
        }
    }

    var_dump($tokens); die();

    //si c'est le cas, on prend le pseudo qui correspond
}

// On va chercher la personne connecter
$currentNickname = $_SESSION['nickname'] ?? null;

// Déconnexion
if(isset($_GET['logout'])) {
    unset($_SESSION['nickname']);
    setcookie('remember'); //supprimer le cookie
    header('Location: index.php');
}

if(! $currentNickname){
    header('Location: index.php');
}


require __DIR__ . '/partials/header.php'; ?>

<h1>Bonjour <?= $currentNickname ?></h1>
<a href="account.php?logout=1">Déconnexion</a>

<?php require __DIR__ . '/partials/footer.php'; ?>