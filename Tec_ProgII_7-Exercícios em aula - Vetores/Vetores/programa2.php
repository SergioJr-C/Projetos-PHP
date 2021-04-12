<?php

$meses = $_POST['meses'];

$maior = -100;
$menor = 100;

foreach ($meses as $temp){
    if($temp < $menor){
        $menor = $temp;
    }
    
    if($temp > $maior){
        $maior = $temp;
    }
}

echo "Temperatura maior entre os meses $maior<br>";
echo "Temperatura menor entre os meses $menor";