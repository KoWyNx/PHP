<?php 
/*
* Ici, on va préparer la connexion à la base de données grâce à PDO
*/

define('DB_HOST', 'localhost'); //define pour définir la constante car 'const' ne fonctionne pas 
define('DB_NAME', 'login');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

try{ // Essaye le code ou va dans le catch
$db = new PDO('mysql:host='.DB_HOST. ';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [
    // On veut un tableau associatdif pour les résultats 
    // Le :: = opérateur de résomtion de portée (Pamayim Nekudotayim)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
} catch (Exception $exception) {
    echo '<p>' . $exception->getMessage() . '</p>';
    echo '<a href="https://www.google.com/search?q=' . $exception->getMessage() . '" target="_blank">Go Google</a>';
    echo '<img src="https://media.tenor.com/DdR3TtZSaBcAAAAd/waiting-wait-cd-dojo.gif" width="100" />';
    die(); // on arrete le code car la BDD ne fonction pas
}
//On range la connexion à la BDD dans la fonction
function db(){

    global $db;



    return $db;
}

?>