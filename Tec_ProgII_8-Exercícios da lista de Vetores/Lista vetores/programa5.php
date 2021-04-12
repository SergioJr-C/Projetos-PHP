<?php
include_once 'programa.php';


if (isset($_POST["ex5"])) {
    $multicinco = gerarmultiplosdecinco(500);
    imprimirvetor($multicinco);
}



function gerarmultiplosdecinco($tamanho) {
    $vetor = array();
    for ($i = 1; $i<=$tamanho; $i++) {
        if($i %5 == 0){
            $vetor [] = $i;
        }
    }
    return $vetor;
}