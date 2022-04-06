<?php

$userNames = ["jovani", "jaan", "jovas"];

do {

    $userName = readline("Ingresa tu nombre de usuario: ");
    echo "\n";
    
} while( in_array($userName, $userNames));

echo "\n";