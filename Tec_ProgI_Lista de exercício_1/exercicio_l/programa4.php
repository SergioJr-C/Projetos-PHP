<?php
    


    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    
    
    if (($valor1 == $valor2) && ($valor2 == $valor3)){
        echo "É um triângulo Equilátero";
        
    }
    if(($valor1 == $valor2) && ($valor2 == $valor3)){
        echo "É um triângulo Isóseles";
    }
    
    if($valor1 != $valor2 && $valor2 != $valor3){
        echo"É um Triângulo Escaleno";
    }