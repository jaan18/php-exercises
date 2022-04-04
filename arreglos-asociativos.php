<?php

$personas = array(
    "Jovani" => array(
        "edad" => 29,
        "apellido" => "Almaraz"
    ),

    "Diana" => array(
        "edad" => 26,
        "apellido" => "Lopez"
    ),
);

echo "La edad de Jovani es " . $personas["Jovani"]["edad"]
. " y su apellido es " . $personas["Jovani"]["apellido"];
echo "\n";

$cafes = array(
    "Americano" => 20,
    "Latte" => 25,
);

echo "El precio del cafe americano es de {$cafes ["Americano"]}";
echo "\n";