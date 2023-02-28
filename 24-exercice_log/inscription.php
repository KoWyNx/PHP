<?php 


require __DIR__ . '/partials/header.php';

$stockage = db()->query('SELECT * FROM user')->fetchAll();

$user = $_POST['user'] ?? null;
$password = $_POST['password'] ?? null;
$confirmation_password = $_POST['verify'] ?? null;

if(!empty($_POST)){

    if(strlen($user) === 0){
        $errors['user'] = 'username obligatoire';
    }
var_dump($user);
var_dump($password);

    if(empty($errors)){
        // On fait la requête SQL pour insérer le film
        $query = db()->prepare('INSERT INTO user (user, password) VALUES (:user, :password)');
        $query->execute([
            'user' => $user,
            'password' => $password,
        ]);
    }  

}




?>

<div class="">
    <form method="post">
        <div class="mb-3 ">
            <label for="user" class="form-label">User</label>
            <input type="text" class="form-control" id="user" aria-describedby="emailHelp" name="user">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="verifyPassword" class="form-label">Verify password</label>
            <input type="password" class="form-control" id="verifyPassword" name="verifyPassword">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="index.php">Acceuil connexion</a>
    </form>
</div>