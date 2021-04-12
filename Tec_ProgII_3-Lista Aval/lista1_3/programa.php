<?php
$num1 = $_POST["n1"];
$num2 = $_POST["n2"];
$num3 = $_POST["n3"];

$result = 0;

$result = (somar_valores($num1, $num2, $num3));

quarta_potencia($result);

somar_valores($num1, $num2, $num3);

calcular_raiz($result);

function somar_valores($num1, $num2, $num3) {
    $lista = array($num1,$num2,$num3);
    echo  "<h1>Soma dos valores: </h1><br>" . array_sum($lista);
    return array_sum($lista);
}


function calcular_raiz($result) {
    $lista2 = sqrt($result);
    echo "<h1>A Raiz quadrada da Soma : $lista2</h1><br>";
}

function quarta_potencia($result) {
    $lista3 = pow($result, 4);
    echo "<h1>A quarta potência de $result é a de: $lista3</h1><br>";
    return $lista3;
}

