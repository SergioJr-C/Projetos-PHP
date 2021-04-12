<?php

if(isset($_POST["ex9"])){
  echo "<h1>Vetor 1: ";
  $vet1 = gerarVetor(5);
  imprimirVetor($vet1);
  echo "Vetor 2: ";
  $vet2 = gerarVetor(5);
  imprimirVetor($vet2);
  echo "A soma dos Vetores é :";
  imprimirVetor(resolucoesMatematicas1($vet1, $vet2));
  echo "A diferença dos Vetores é: ";
  imprimirVetor(resolucoesMatematicas2($vet1, $vet2));
  echo "O produto dos vetores é :";
  imprimirVetor(resolucoesMatematicas3($vet1, $vet2));
  echo "A divisão dos elementos dos vetores é:";
  imprimirVetor(resolucoesMatematicas4($vet1, $vet2));
}


function resolucoesMatematicas1($vet1,$vet2) {
    $soma = array ();
    for ($i = 0; $i < count($vet1); $i++) {
       $soma[] = $vet1[$i] + $vet2[$i];
    }
    return $soma;
}

function resolucoesMatematicas2($vet1, $vet2) {
    $diferenca = array();
    for ($i = 0; $i < count($vet1); $i++) {
        $diferenca[] = $vet1[$i] - $vet2[$i];
    }
    return $diferenca;
}

function resolucoesMatematicas3($vet1,$vet2) {
    $produto = array();
    for ($i = 0; $i < count($vet1); $i++) {
        $produto[] = $vet1[$i] * $vet2[$i];
    }
    return $produto;
}

function resolucoesMatematicas4($vet1, $vet2) {
    $divisao = array();
    for ($i = 0; $i < count($vet1); $i++) {
        $divisao[] = $vet1[$i] / $vet2[$i];
    }
    return $divisao;
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
        $vetor[] = rand(1, 100);
    }
    return $vetor;
}
