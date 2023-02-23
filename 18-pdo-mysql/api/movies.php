<?php

// Comment renvoyer un JSON ?

$example = ['name' => 'Toto'];

//echo json_encode($example);  //{"name", "Toto"}

require __DIR__ . '/../config/db.php';
require __DIR__ . '/../config/functions.php';

//Récupérer les donées de la BDD
$movies = db()->query('SELECT * FROM movies')->fetchAll();

// On doit préciser dans la réponse HTTP qu'on renvoie du JSON
header('Content-Type: application/json');

echo json_encode($movies);



// On peut transformer les données avant de les renvoyer

$newMovies = [];

foreach($movies as $movie){
   $newMovies[] = [
    'id' => $movie['id_movie'],
    'title' => $movie['title'],
    'realaese_at' => format_date($movie['realease_at']),
    'description' => $movie['description'],
    'duration' => format_duration($movie['duration']),
    'Cover' => 'http://localhost/php/18-pdo-mysql/uploads/'.$movie['Cover'],
   ];
}


