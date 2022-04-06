<?php

// Sopresas
// Sorpresa 1: Chocolate
// Sorpresa 2: Pastel
// Sorpresa 3: Pan dulce

$valor = readline("Ingresa un numero del 1 al 3 para ver tu sorpresa: ");

switch ($valor) {
    case 1:
        echo "Tu sorpresa es un chocolate";
        echo "\n";
        break;

    case 2:
         echo "Tu sorpresa es un Pastel";
         echo "\n";
        break;
    case 3:
         echo "Tu sorpresa es un Pan dulce";
         echo "\n";
        break;

    default:
        echo "Intenta de nuevo";
        echo "\n";
        break;
}
