<?php

$perros = ["labrador","husky","pug"];

// count, cuenta elementos en el array
echo count($perros);
echo "\n";

// array_push, ingresa elemento al final del array
array_push($perros,"doberman");

// var_dump
//var_dump($perros);

// is_array, es un arreglo?
$this_is_not_an_array = "not an array";
var_dump(is_array($this_is_not_an_array));

// explode, convierte un string a un array
// $lista_frutas = "fresa,manzana,pina";
// $lista_frutas = explode(",",$lista_frutas);
// var_dump($lista_frutas);

// implode, convierte un array a un string
$lista_frutas_array = ["fresa,manzana,platano"];
$lista_frutas = implode(",",$lista_frutas_array);
var_dump($lista_frutas);