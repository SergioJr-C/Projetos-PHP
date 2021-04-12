<?php
    $num = $_POST["numero"];
    
    if($num % 2 == 0 ){
       echo "$num É par";
    }

    if($num %2 == 1){
        echo "$num Não é par";
    }