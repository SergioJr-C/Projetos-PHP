<?php
    
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    
    if($valor1 != $valor2){
        echo "São diferentes!!";
    }else{
        echo "São iguais";
    }