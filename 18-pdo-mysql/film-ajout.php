<?php require __DIR__ . '/partials/header.php';



//Récupérer les catégories
$categories = db()->query('SELECT * FROM category')->fetchAll();

$title = sanitize($_POST['title'] ?? null);
$realease_at = sanitize($_POST['realease_at'] ?? null);
$description = sanitize($_POST['description'] ?? null);
$duration = sanitize($_POST['duration'] ?? null);
$category = sanitize($_POST['category'] ?? null);

$errors = [];


// Vérifier et traiter le formulaire
if(!empty($_POST)){
    // Vérification des erreurs
    if(strlen($title) === 0){
        $errors['title'] = 'Le titre est obligatoire';
    }

    //vérifiaction de la date 
    $date = explode('-', $realease_at);
    $year = (int)($date[0] ?? 0);
    $month =(int)($date[1] ?? 0);
    $day =(int)($date[2] ?? 0);
    if(! checkdate($month, $day, $year)) {
        $errors['realsease_at'] = 'La date est incorrecte';
    }

    if(mb_strlen($description) <= 5){
        $errors['description'] = 'La description doit faire 5 caratères minimum.';
    }

    if($duration <1 || $duration >999){
        $errors['duration'] = 'La durée doit être entre 1 et 999 minutes';
    }

    // Vérifier l'existence de la gatégories avec une requête
    // -> fetchColumn() prend la valeur unique du résultat 
    $exists = db()->query('SELECT COUNT(id_category) FROM category WHERE id_category = '.intval($category))->fetchColumn(); // 1 ou 0

    if(! $exists){
        $errors['category'] = 'La catégorie doit exister';
    }



    // traitement du formulaire s'il n'y a pas d'erreurs

    if(empty($errors)){
        // On fait la requête SQL pour insérer le film
        $query = db()->prepare('INSERT INTO movies (title, realease_at, description, duration, Cover, id_category) VALUES (:title, :realease_at, :description, :duration, :Cover, :category)');
        $query->execute([
            'title' => $title,
            'realease_at' => $realease_at,
            'description' => $description,
            'duration' => $duration,
            'Cover' => null,
            'category' => $category,
        ]);
    }   
}




?>

<div class="container-md mt-3">
    <h1 class="text-center">Ajouter un film</h1>
    <?php if (!empty($errors)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach ($errors as $error) { ?>
                <p><?= $error ?></p>
            <?php } ?>
        </div>
    <?php } ?>
   
    <form class="row g-3" action="" method="post">
        <div class="col-md-6">
            <label for="title" name="title" id="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="col-md-6">
            <label for="realease_at" name="realease_at" id="realease_at" class="form-label">Date de sortis</label>
            <input type="date" class="form-control" id="realease_at" name="realease_at">
        </div>
        <div class="col-md-6">
            <label for="description" name="description" id="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="col-md-6">
            <label for="duration" name="duration" id="duration" class="form-label">Durée</label>
            <input type="text" class="form-control" id="duration" name="duration">
        </div>
        <!-- @todo upload l'image  -->
        <div class="col-md-6">
            <label for="category" name="category" id="category" class="form-label">Catégorie</label>
            <select type="text" class="form-control" id="category" name="category">
                <?php foreach ($categories as $cat) { ?>
                    <option value="<?= $cat['id_category'] === $category ? 'selected': '' ?>"> <?= $cat['Name']; ?></option>
                <?php } ?>
                
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>

</div>


<?php require __DIR__ . '/partials/footer.php' ?>