<?php
    $num = $_POST["numero"];
    
    if($num % 2 == 0 ){
       echo "$num é par";
    }

    if($num %2 == 1){
        echo "$num é ímpar";
    }