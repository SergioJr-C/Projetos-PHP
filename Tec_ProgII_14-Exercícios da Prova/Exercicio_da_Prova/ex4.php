<?php


$vetordeString = "Praticando a programação tudo se torna mais fácil e interessante!! Estudar é legal";

$vetorExplodido = explode(" ", $vetordeString);
echo "Vetor de Strings:<br>".$vetordeString;
echo "<br>";
echo "Quantidade de Palavras:<br> ".count($vetorExplodido);


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
