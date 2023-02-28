<?php

session_start();


// On va chercher la personne connecter
$currentNickname = $_SESSION['user'] ?? null;

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
<a href="connecte.php?logout=1">Déconnexion</a>

<?php require __DIR__ . '/partials/footer.php'; ?>