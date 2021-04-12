<?php

    $anonasc = $_POST['ano'];
    $anatual = $_POST['anoatual'];
    
    if($anonasc < $anatual) {
        echo "<br>O ano de nascimento é válido";
    }else{
        echo "<br>O ano de nascimento não é válido";
    }
    
    $idade = $anonasc - $anatual;
    
    
    echo "<br>A sua idade é de: $idade anos";







//digite o ano de nascimento e o ano atual
//mostrar a idade da pessoa
//verificar se o ano de nascimento é válido


//menor que o ano atual