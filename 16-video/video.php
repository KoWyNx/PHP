<?php require __DIR__ . '/partial/header.php'; ?>


<?php




if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $color = $_GET['color'];
} else {
    $color = $_GET['color'];
    header("HTTP/1.0 404 Not Found");
    echo "<h1>Erreur 404 - Vidéo introuvable</h1>";
    echo "<p>Désolé, la vidéo que vous recherchez est introuvable.</p>";
}

?>


<div style="background-color: <?= $color?>; margin-top: 56px " class=" p-3">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $id ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<form action="videos.php">
    <button class="btn btn-primary">Retour au vidéos</button>
</form>