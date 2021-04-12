<?php

if(isset($_POST["ex8"])){
echo "Notas de alunos, Avaliações do 1° Semestre: ";
$g1 = gerarVetor(20);
imprimirVetor($g1);
echo "Notas de alunos, Avaliações do 2° Semestre: ";
$g2 = gerarVetor(20);
imprimirVetor($g2);
echo "Média Aritmética das Notas de alunos, das Avaliações do 1° e do 2° Semestre: ";
imprimirVetor(mediaAritmetica($g1, $g2));
}

function mediaAritmetica($g1, $g2) {
    $g3 = array();
    for ($i = 0; $i < count($g1); $i++) {
        $g3 [] = ($g1[$i] + $g2[$i])/2;
        }
        return $g3;
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
