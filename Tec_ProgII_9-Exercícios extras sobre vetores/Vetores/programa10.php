<?php

if(isset($_POST["ex10"])){
    echo "<h1>Vetores aleatórios";
    $vetoresAleatorios = gerarVetor(30);
    imprimirVetor($vetoresAleatorios);
    echo "Percentual de número Pares<br>";
    echo percentual_numPares ($vetoresAleatorios) . "%";
}


function percentual_numPares($vetoresAleatorios) {
    $pares = array();
    foreach ($vetoresAleatorios as $elemento) {
        if ($elemento %2 == 0) {
           $pares[] = $elemento;
        }
    }
    //return $pares;
    
    $total = count($vetoresAleatorios);
    $percentil = 100*count($pares)/$total;
//     for ($i = 0; $i < count($vetoresAleatorios); $i++) {
//         $percentil = (100 * $pares)/$total;
//     }
    return $percentil;
  
}


//100*pares/total

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
        $vetor[] = rand(1, 100);
    }
    return $vetor;
}

//100% é o tamanho do vetor que é 30, par é x