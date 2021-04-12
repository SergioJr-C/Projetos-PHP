<?php

if(isset($_POST["ex1"])){
    $alunos = gerarVetor(40);
    echo "<h1>Vetor com idade dos Alunos: </h1>";
    imprimirVetor($alunos);
    
    $maioresDeIdade = obterMaiores18($alunos);
    $quantidade = count($maioresDeIdade);
    echo "<h1> Foram encontrados $quantidade alunos Maiores de Idade";
    imprimirVetor($maioresDeIdade);
}

function obterMaiores18($vetor) {
    $maiores = array();
    foreach ($vetor as $elemento){
        if($elemento >= 18){
            $maiores[] = $elemento;
        }
    }
    return $maiores;
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
        $vetor[] = rand(7, 60);
    }
    return $vetor;
}