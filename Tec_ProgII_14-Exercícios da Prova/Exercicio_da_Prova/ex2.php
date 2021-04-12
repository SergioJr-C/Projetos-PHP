<?php

$vetor = gerarVetor(10, -100, 100);

echo "<h1>Vetor ".imprimirVetor($vetor);


echo elementosPositivos($vetor);

function elementosPositivos($vetor) {
    $qtdPositivos = 0;
    for ($i = 0; $i < count($vetor); $i++) {
        if ($vetor[$i] > 0) {
            $qtdPositivos++;
            echo "<h1> [$vetor[$i]] <br>";
            echo "<br>";
        } 
    }
    echo "Quantidade de valores Positivos:  $qtdPositivos";
}

function gerarVetor($tamanho, $min, $max) {
    $vetor = array();
    for ($i = 0; $i < $tamanho; $i++) {
        $vetor[] = rand($min, $max);
    }
    return $vetor;
}

function imprimirVetor($vetor) {
    echo "<h1><br>";
    foreach ($vetor as $elemento) {
        echo "[$elemento]";
    }
    echo "</h1><br>";
}
