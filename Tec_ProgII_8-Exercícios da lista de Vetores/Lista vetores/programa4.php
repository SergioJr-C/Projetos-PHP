<?php
include_once 'programa.php';

if (isset($_POST["ex4"])) {
    $impares = gerarvetoresimpares(50);
    imprimirvetor($impares);
}


function gerarvetoresimpares($tamanho) {
    $vetor = array();
    for ($i = 0; $i<$tamanho; $i++) {
            $vetor [] = $i;
    }
    return $vetor;
}