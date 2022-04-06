<?php

$edad_minima = 18;
$se_ve_grande = true;
$se_ve_chico = false;

if($edad_minima < 18)
    echo "Lo siento pero no puedes ingresar";
else if($se_ve_grande)
    echo "Pasele señor $br";
else if($se_ve_chico)
    echo "A ver el ID morro";
else
    echo ("condicional por si no cumple las otras");

echo "\n";