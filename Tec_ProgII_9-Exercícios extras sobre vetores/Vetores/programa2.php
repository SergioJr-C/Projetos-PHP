<?php

if(isset($_POST["ex2"])){
    
    $vetA = gerarVetor(15);
    imprimirVetor($vetA);
    
    $vetB = armazenarVetores($vetA);
    imprimirVetor($vetB);
}



function armazenarVetores($vetA) {
    $vetB = array();    
    foreach ($vetA as $elemento){
        if($elemento %2 == 0 ){
            $mult = $elemento * 5;
            $vetB[] = $mult;
        }else{
            $soma = $elemento + 5;
            $vetB[] = $soma;
        }
    }
    return $vetB;
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

