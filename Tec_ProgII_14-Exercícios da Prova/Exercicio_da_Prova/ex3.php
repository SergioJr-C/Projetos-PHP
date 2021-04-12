<?php

$vetor = gerarVetor(10, 560, 10500);
echo "Salários ".imprimirVetor($vetor);
echo "<br>";
echo "Maior Salário é de: ".max($vetor);

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
