<?php


    $valor = $_POST['valor'];
    
    
    if ($valor%3 == 0){
        echo "O número $valor é divisível 3";
    }