<?php


    $valor = $_POST['valor'];
    if(($valor >= 20) && ($valor <= 90)){
        echo "O número $valor está entre 20 e 90";
    }
    
    
    //ler um número e informar se é entre 20 e 90;