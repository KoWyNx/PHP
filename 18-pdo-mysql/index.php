<?php require __DIR__ . '/partials/header.php' ?>


<h1>Webfli</h1>

<?php
//On peut faire une requête SQL en PHP. 
$query = db()->query('SELECT * FROM movies');

//On doit exécuter la requête pour avoir le résultat
$movies = $query->fetchAll();

//var_dump($movies);

?>

<div class="container-lg">
    <div class="text-center">
        <a href="film-ajout.php" class="btn btn-primary text-center i-block">Voir</a>
    </div>
</div>


<div class="container-lg">
    <div class="d-flex flex-wrap justify-content-center">
        <?php foreach ($movies as $movie) { ?>
            <div class="card m-2" style="max-width: 12rem">
                <img src="uploads/<?= $movie['Cover'] ?>" class="card-img-top object-fit-cover" alt="affiche" style="height: 80%">
                <div class="card-body">
                    <h5 class="card-title m-0"><?= truncate($movie['title']) ?></h5>
                    <p class="card-text"><?= format_date($movie['realease_at']) ?></p>
                    <a href="film.php?id=<?= $movie['id_movie']; ?>" class="btn btn-primary text-center d-block">Voir</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<?php require __DIR__ . '/partials/footer.php' ?>