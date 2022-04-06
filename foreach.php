<?php

$frutas = array(
    "manzana" => 10,
    "sandia" => 20,
    "uvas" => 30,
    "naranja" => 5,
);

foreach ($frutas as $fruta => $precio) {
    echo "La $fruta cuesta $$precio MXN ";
}

echo "\n";