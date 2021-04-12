<?php

if(isset($_POST["ex5"])){
$vetoraleat = gerarVetor(30);
echo "<h1>Vetores";
imprimirVetor($vetoraleat);
echo "Posições de cada número menor que 0: ";
Vetormenorqzero($vetoraleat);
}

function Vetormenorqzero($vetoraleat) {
    echo "<h1><br>";
    foreach ($vetoraleat as $indice => $elemento){
        if ($elemento < 0) {
            echo "[$indice]";
        }
    }
    echo "<h1><br>";
}


function imprimirVetor($vetor){
    echo "<h1><br>";
    foreach ($vetor as $elemento){
        echo "[$elemento] ";
    }
    echo "<h1><br>";
}

function gerarVetor($tamanho){
    $vetor = array();
    for($i=0; $i<$tamanho; $i++){
        $vetor[] = rand(-100, 100);
    }
    return $vetor;
}
