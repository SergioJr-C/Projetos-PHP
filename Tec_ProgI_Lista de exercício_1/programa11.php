<?php


    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    
    if($valor1 > $valor2){
        echo "$valor2,$valor1";
    }else{
        echo "$valor1,$valor2";
    }
    
    