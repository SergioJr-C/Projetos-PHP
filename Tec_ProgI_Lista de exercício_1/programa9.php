<?php

    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    
    if(($sexo == "feminino") && ($idade <= 25)){
        echo "ACEITA";
    }else{
        echo "NÃO ACEITA";
    }



//sexo e idade de uma pessoa
//se a pessoa for do sexo feminino e tiver menos que 25 anos
//caso contrário imprimir a mensagem não aceita; 