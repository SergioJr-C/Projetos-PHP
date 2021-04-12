<?php

    $num = $_POST["numero"];
    
    if($num >0){
        echo "o $num é um número positivo";
    }
    
    if($num <0){
        echo"O $num é um número negativo";
    }
    
    if($num == 0){
        echo "O $num é um número nulo";
    }