<?php
session_start();

$errors = [];


if (!empty($_POST)) {


    $user = $_POST['user'] ?? null;
    $password = $_POST['password'] ?? null;


    


    if ($user === 'admin' && $password === 'admin') {     
    $_SESSION['user'] = $user;
    $_SESSION['password'] = $password;
    header('Location: connecte.php');
    }else{
        $errors['user'] = 'invalide';
    }
}

var_dump($_SESSION['user']);
var_dump($_SESSION['password']);


require __DIR__ . '/partials/header.php'; ?>


<?php foreach($errors as $error) { ?>
    <h2><?= $error ?></h2>
<?php } ?>
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
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="inscription.php">Inscription</a>
    </form>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>