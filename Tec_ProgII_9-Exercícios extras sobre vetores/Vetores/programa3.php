<?php

if(isset($_POST["ex3"])){
    echo "Vetor A: ";
    $vetA = gerarVetor(15);
    imprimirVetor($vetA);
   
   echo "Vetor B: ";
   $vetB = gerarVetor(15);
   imprimirVetor($vetB);
   
   $soma = armazenarVariavel($vetA, $vetB);
   echo "A soma da multiplicação dos elementos do Vetor A e Vetor B é de 
    $soma";
}


function armazenarVariavel($vetA, $vetB) {
    $soma = 0;
    for ($i = 0; $i < count($vetA); $i++) {
       $mult = $vetA[$i] * $vetB[$i];
       $soma += $mult;
    }
    return $soma;
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
        $vetor[] = rand(1, 15);
    }
    return $vetor;
}
