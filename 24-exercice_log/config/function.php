<?php

function selectUser($user){
    $query = db()->prepare('SELECT * FROM user Where user = :user');
    $query->execute(['user' => $user]);

    return $query->fetch();
}