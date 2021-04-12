<?php
include_once 'programa.php';

if(isset($_POST["ex6"])){
    $vetor  =  gerarvetor(12);
    imprimirvetor($vetor);
   
    $p1 = rand(0, 12);
    $p2 = rand(0, 12);
    
    $soma = $vetor[$p1] + $vetor[$p2];
    
    echo "<h1>Soma dos elementos na posição $p1 com o elemento na
    posição $p2 é: $soma</h1>";
}

