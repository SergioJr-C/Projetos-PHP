<?php
    
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    
    if((($valor3 > $valor2)&&($valor3 > $valor1))&&(($valor2 > $valor1))){
        echo "$valor1,$valor2,$valor3";
    }elseif(($valor2 > $valor3) && ($valor2 < $valor1)){
        echo"$valor3,$valor2,$valor1";
    }elseif(($valor1 < $valor3) && ($valor3 < $valor2)){
        echo"$valor1,$valor3,$valor2";
    }else{
        echo"$valor3,$valor1,$valor2";
    }
    
    
    