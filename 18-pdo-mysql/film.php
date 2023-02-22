<?php require __DIR__ . '/partials/header.php';

//Récupèrer l'id sans l'url

$id = $_GET['id'] ?? null;

//Je dais une requête pour aller chercher le film dans la BDD

$query = db()->prepare('SELECT * FROM movies
WHERE id_movie = :id');

//Pour les requête préparée (se proteger des failles SQL)
//On doit remplacer les paramètres (:id devientt $id)
$query->execute(['id' => $id]);
$movie = $query->fetch();

//var_dump($movie);

/*
 * Choses à faire :
 * - Intégrer la page du film (2 colonnes => Image à gauche et 
 *   le titre, la durée, la date et la description à droite).
 * - Pour la durée, il faut une fonction qui transforme une durée donnée
 *   en minutes en heures / minutes (122 devient 2h02)
 * - Ecrire une seconde requête SQL qui permet d'afficher les acteurs
 *   du film dans une liste (join)
 * - Si l'id du film n'existe pas, on peut afficher une 404
 */


 $actors = selectAll('SELECT * FROM actor AS a INNER JOIN movie_has_actor AS mha ON a.id_actor = mha.id_actor WHERE mha.id_movie = :id', ['id' => $id]);
?>

<div class="d-flex justify-content-center">

    <div style="width: 50%"><img src=" uploads/<?= $movie['Cover'] ?>" class="img-fluid object-fit-cover" alt="affiche"></div>
    <div style="width: 50%">
        <h1><?= $movie['title'] ?></h1>
        <p>Durée du film : <?= format_duration($movie['duration']) . ' (' . $movie['duration'] . ')' ?> Minutes</p>
        <p> Date du film : <?= $movie['realease_at'] ?></p>
        <p>Description du film :</p>
        <p><?= $movie['description'] ?></p>
        <ul>
            <?php  foreach ($actors as $actor) { ?>
                <li><?= $actor['firstname']. ' ' .$actor['name'] ?></li>
            

              <?php } ?>
        </ul>

    </div>
</div>






<?php require __DIR__ . '/partials/footer.php' ?>