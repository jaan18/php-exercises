<?php

$michis = array(
    "michiUno" => array(
        "nombre" => "Sheñol",
        "Color" => "Blanco",
        "Comida" => array(
            "Favorita" => "atun",
            "No le gusta" => "pollo"
        )
    ),

    "michiDos" => array(
        "nombre" => "Pelusa",
        "Color" => "Negro",
        "Comida" => array(
            "Favorita" => "atun",
            "No le gusta" => "pollo"
        )
    ),

    "michiTres" => array(
        "nombre" => "Bebe",
        "Color" => "Amarillo",
        "Comida" => array(
            "Favorita" => "atun",
            "No le gusta" => "pollo"
        )
    ),
);

echo "El michi numero uno se llama " . $michis["michiUno"]["nombre"];
echo "y su comida favorita es {$michis["michiUno"]["Comida"]["Favorita"]}";
echo "\n";