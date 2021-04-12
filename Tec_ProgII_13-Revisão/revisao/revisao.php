<?php
$vetor = gerarVetor(10, -10, 10);
imprimirVetor($vetor);
positivos($vetor);


function positivos($vetor) {
    $quantidade = 0;
    echo "<br>";
    foreach ($vetor as $elemento) {
        if ($elemento %2 == 0) {
           $quantidade++; 
           echo "[$elemento]";
        }
    }
    echo "<br>O vetor contém $quantidade elementos pares";
}



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



$vetordestrings = "Rodei mas vou passar";
$vetorexplodido = explode(" ", $vetordestrings);
$lista = implode(' ', $vetorexplodido);
echo "<br>";
echo "A quarta palavra do vetor é: ";
echo $vetorexplodido[3];
//echo "<br>$lista";