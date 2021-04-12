<?php

if(isset($_POST["ex4"])){
  echo "<h1>Vetores ordenados";
  $vetores = gerarVetor(10);
  imprimirVetor($vetores);
  
  echo "Vetores Desordenados";
  imprimirVetor(vetores_ao_Contrario($vetores));
  
}

function vetores_ao_Contrario($vetores) {
    $vetorcont = array();
    //$iaux = 0;
    for ($i = 9; $i >= 0; $i--) {
        $vetorcont[] = $vetores[$i]; 
        //$iaux++;
    } 
    return $vetorcont;
    
     //  for ($i = 10; $i > 0; $i--) {
       //echo $vetorcont[$i];
   // }
    
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
        $vetor[] = rand(0, 10);
    }
    return $vetor;
    }
