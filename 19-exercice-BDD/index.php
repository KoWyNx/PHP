<?php require __DIR__ . '/partials/header.php';




$query = db()->query('SELECT * FROM contacts');

$categories = db()->query('SELECT * FROM contacts')->fetchAll();
$name = sanitize($_POST['name'] ?? null);
$commentaire = sanitize($_POST['message'] ?? null);


$errors = [];

if (!empty($_POST)) {
    // Vérification des erreurs
    if (strlen($name) <= 1) {
        $errors['name'] = 'Le nom doit faire minimum 1 caractère';
    }

    if (strlen($commentaire) <= 5) {
        $errors['message'] = 'le commentaire doit faire 5 caractères minimum';
    }

    if (empty($errors)) {
        // On fait la requête SQL pour insérer les infos
        $query = db()->prepare('INSERT INTO contacts (name, message) VALUES (:name, :message)');
        $query->execute([
            'name' => $name,
            'message' => $commentaire,

        ]); ?>


<?php
    }
}

?>




<div class="container">
    <h1 class="text-center">Contact</h1>
    <?php if (empty($errors) && !empty($_POST) ) { ?>
        <div class="alert alert-success" role="alert">
  Success
</div>
    <?php } ?>

    <?php if (!empty($errors)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach ($errors as $error) { ?>
                <p><?= $error ?></p>
            <?php } ?>
        </div>
    <?php } ?>


</div>
<div>
    <form class="row g-3" action="" method="post">
        <div class="col-md-6">
            <label for="name" name="name" id="name" class="form-label">Name </label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-md-6">
            <label for="message" class="form-label">commentaire</label>
            <textarea type="text" class="form-control" id="message" name="message"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
</div>