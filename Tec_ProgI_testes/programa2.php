<?php
    $num = $_POST["numero"];
    
    if($num % 2 == 0 ){
       echo "$num � par";
    }

    if($num %2 == 1){
        echo "$num N�o � par";
    }