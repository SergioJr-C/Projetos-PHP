<?php

$x = $_POST["x"];
$y = $_POST["y"];

calcular_expressao($x, $y);

function calcular_expressao($x, $y) {
    if($x >= 0){
        echo "<h1>Os valores digitados estão válidos</h1>";
        $lista = pow($x, 3) + sqrt($x) - 10*$y;
        echo "O resultado é de: $lista";
    }else{
        echo "<h1>Os valores digitados não são Válidos!</h1>";
        break;
    }    
    return $lista;    
}

//x=2, y=3