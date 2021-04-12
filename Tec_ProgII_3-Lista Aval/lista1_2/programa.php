<?php

$ano = $_POST["ano"];

verificar_ano($ano);

function verificar_ano($ano) {
    if(($ano % 4 ==0) && ($ano != 100) && ($ano % 400==0)){
        return "Ano de $ano é Bissexto";
    }else{
        echo "Ano de $ano não é Bissexto";
    }
}


/*
* index que capture um ano qualquer digitado pelo usuário
*função que verifique se o ano é bissexto ou não. 
*/