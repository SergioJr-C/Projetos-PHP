<?php

// $valor1 = $_POST["v1"];
// $valor2 = $_POST["v2"];
// $op = $_POST["operacao"];

// calculadora($valor1,$op,$valor2);

function calculadora($valor1,$op,$valor2) {
    $c = 0;
    if($op == '+'){
       $c = $valor1+$valor2;
    }elseif ($op == '-'){
    $c = $valor1 - $valor2;
    }elseif ($op == '*'){
        $c = $valor1 * $valor2;
    }elseif ($op == '/'){
        $c = $valor1 / $valor2;
    }
    echo "$c";
}


