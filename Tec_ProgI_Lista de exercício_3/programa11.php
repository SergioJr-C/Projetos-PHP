<?php

$x = $_POST["valor1"];
$y = $_POST["valor2"];


$multi = 1;
for ($i = 1; $i <= $y; $i++) {
    $multi = $multi * $x;
}


echo "$x elevado na $y potencia = $multi";

//digite x e y depois mostrar resultado de x elevado na y