<?php
include_once 'programa.php';

if(isset($_POST["ex6"])){
    $vetor  =  gerarvetor(12);
    imprimirvetor($vetor);
   
    $p1 = rand(0, 12);
    $p2 = rand(0, 12);
    
    $soma = $vetor[$p1] + $vetor[$p2];
    
    echo "<h1>Soma dos elementos na posi��o $p1 com o elemento na
    posi��o $p2 �: $soma</h1>";
}

