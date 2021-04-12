<?php

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    
    $maior = "Maior Número";
    
    if (($valor1 > $valor2) && ($valor1 > $valor3)){
       echo "$maior = $valor1";
    }elseif(($valor2 > $valor1) && ($valor2 > $valor3)){
        echo "$maior = $valor2";
    }else{
        echo "$maior = $valor3";
    }