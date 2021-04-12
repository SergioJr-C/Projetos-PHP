<?php

//gerarVetor($tamanho, $min, $max);
//imprimirVetor($vetor);
//subtrairVetores($vetorA, $vetorB);

$vetorA = gerarVetor(5, 0, 10);
$vetorB = gerarVetor(5, 0, 10);



echo "Vetor A: ".imprimirVetor($vetorA);

echo "Vetor B: ".imprimirVetor($vetorB);

$vetorC = subtrairVetores($vetorA, $vetorB);

echo "<br>";
echo "Vetor C: ".imprimirVetor($vetorC);




function subtrairVetores($vetorA, $vetorB) {
    $vetorC = array();
    for ($i = 0; $i < count($vetorA); $i++) {
        $vetorC [] = $vetorA[$i] - $vetorB[$i];
    }
    return $vetorC;
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

