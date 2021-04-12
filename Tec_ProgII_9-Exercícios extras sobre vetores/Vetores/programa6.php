<?php

if(isset($_POST["ex6"])){
    echo "Vetor 1";
    $vetor1 = gerarVetor(20);
    imprimirVetor($vetor1);
    echo "Vetor 2";
    $vetor2 = gerarVetor(20);
    imprimirVetor($vetor2);
    
    echo "Resultados da soma dos Vetores 1 e 2, armazenados no Vetor 3 é: ";
    imprimirVetor(soma_vetores($vetor1, $vetor2));
}

function soma_vetores($vetor1,$vetor2) {
   $vetor3= array();
    for ($i = 0; $i < 20; $i++) {
        $vetor3 [] = $vetor1[$i] + $vetor2[$i];
        
    }
    return $vetor3;
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
        $vetor[] = rand(1, 5);
    }
    return $vetor;
}
