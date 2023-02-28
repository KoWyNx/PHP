<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>



<?php 
function sanitize($value){
    return trim(htmlspecialchars($value ?? ''));

    
 }

 $name = sanitize($_POST['name'] ?? null);
 $cvFile = $_FILES['file'] ?? null;

 $errors = [];





 if(!empty($_POST)){

    if(strlen($name < 5)){
    $errors['name'] = 'Le nom est invalide';
}
 
    
 if($cvFile['error'] !== 0){
    $errors['cv'] = 'Le fichier est vide';
 }

 var_dump($cvFile);
}


?>
    <?php
    if (!empty($errors)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach ($errors as $error) { ?>
                <p><?= $error ?></p>
            <?php } ?>
        </div>
    <?php } else if (empty($errors) && !empty($_POST)) { ?>
        <div class="alert alert-success" role="alert">
            <p>Le CV est envoyer !</p>
        </div>
    <?php } ?>


<form action="" method="post" enctype="multipart/form-data">
<div class="mb-3">
  <label for="name1" class="form-label" name="name">Nom</label>
  <input type="text" class="form-control" id="name" placeholder="Jean Dupont" name="name">
</div>

<div class="mb-3">
  <label for="formFile" class="form-label" name="file">CV :</label>
  <input class="form-control" type="file" id="formFile" name="file">
</div>

<button class="btn bg-primary">Envoyer</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>