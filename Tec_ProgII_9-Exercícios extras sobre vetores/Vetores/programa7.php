<?php

if(isset($_POST["ex7"])){
   echo "<h1>Salário de 5 pessoas: ";
   $salario = gerarVetor(5);
   imprimirVetor($salario);
   echo "Salários menores que 1000 com acréscimo de 10%: ";
  imprimirVetor(salarioAtualizado($salario));
}

function salarioAtualizado($salario) {
    $salarioatualizado = array();
    foreach ($salario as $elemento) {
        if($elemento < 1000){
           $salarioatualizado[] = $elemento *( 1.10);
        }else{
            $salarioatualizado[] = $elemento;
        }
    }
    return $salarioatualizado;
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
        $vetor[] = rand(500, 5000);
    }
    return $vetor;
}
