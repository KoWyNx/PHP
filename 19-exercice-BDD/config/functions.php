<?php 

function sanitize($value){
    return trim(htmlspecialchars($value ?? ''));
 }