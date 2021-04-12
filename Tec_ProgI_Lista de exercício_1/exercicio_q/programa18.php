<?php
   

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $valor4 = $_POST['valor4'];
    $valor5 = $_POST['valor5'];
    
    
    if(($valor1>$valor2)&&($valor1>$valor3)&&($valor1>$valor4)&&($valor1>$valor5)){
        echo "O 1° número, $valor1 é o Número Maior";
    }elseif(($valor2>$valor1)&&($valor2>$valor3)&&($valor2>$valor4)&&($valor2>$valor5)){
        echo "O 2° número, $valor2 é o Número Maior";
    }elseif(($valor3>$valor1)&&($valor3>$valor2)&&($valor3>$valor4)&&($valor3>$valor5)){
        echo "O 3° número,  $valor3 é o Número Maior";
    }elseif(($valor4>$valor1)&&($valor4>$valor2)&&($valor4>$valor3)&&($valor4>$valor5)){
        echo "O 4° número, $valor4 é o Número Maior";
    }else{
        echo "O 5° número, $valor5 é o Número Maior";
    }
    
    
    
    