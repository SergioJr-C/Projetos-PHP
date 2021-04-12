<?php

    $s = "*";
    
    echo "João...";
    
    linha($s);
    
    echo "Gustavo....";
    linha("#");
    
    echo "Jorge....";
    linha("!");
    
    echo "Pedro...";
    linha("@");
    
    echo "Sérgio...";
    linha("$");
    
    
    function linha($simbolo){
        echo "<br>";
        for($i=0; $i <25; $i++){
            echo "$simbolo";
        }
        echo "<br>";
    }