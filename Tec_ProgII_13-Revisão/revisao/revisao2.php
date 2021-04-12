<?php
$vetor = gerarVetor(10, 0, 1000);
echo "<h1>Vetor: ";
imprimirVetor($vetor);

echo"<br>";
echo "O maior valor do Vetor é ".max($vetor);

function gerarVetor($tamanho, $min, $max) {
    $vetor = array();
    for ($i = 0; $i < $tamanho; $i++) {
        $vetor[] = rand($min, $max);
    }
    return $vetor;
}

function imprimirVetor($vetor) {
    echo"<h1><br>";
    foreach ($vetor as $elemento) {
        echo "[$elemento]";
    }
    echo "<h1><br>";
}
