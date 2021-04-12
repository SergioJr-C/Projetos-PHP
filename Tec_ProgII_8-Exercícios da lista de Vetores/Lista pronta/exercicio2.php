<?php
include_once 'exercicio1.php';

if(isset($_POST["ex2"])){
    $vetor = gerarVetor(10);    
    imprimirVetor($vetor);
    
    $rep = valoresRepetidos($vetor);
    imprimirVetor($rep);
}

function valoresRepetidos($vetor){
    $repetidos = array();
    for($i=0; $i<count($vetor); $i++){
        for($j=0; $j<count($vetor); $j++){
            if(($vetor[$i] == $vetor[$j]) && ($i != $j)){
                if(!in_array($vetor[$i], $repetidos)){
                    $repetidos[] = $vetor[$i];
                }
            }
        }
    }
    return $repetidos;
}

?>