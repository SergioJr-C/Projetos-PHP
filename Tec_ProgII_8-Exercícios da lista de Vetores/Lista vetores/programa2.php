<?php
include_once 'programa.php';

if(isset($_POST["ex2"])){
$vetor  =  gerarvetor(10);
imprimirvetor($vetor);

 $rep = valoresrepetidos($vetor);
 imprimirvetor($rep);
}

function valoresrepetidos($vetor){
    $repetidos = array();
    for ($i = 0; $i < count($vetor); $i++) {
        for ($j = 0; $j  < count($vetor); $j++) {
            if(($vetor[$i] == $vetor[$j]) && ($i != $j )){
                if(!in_array($vetor[$i], $repetidos)){
                    $repetidos [] = $vetor[$i];
                }
                
            }
        }
        
        
    }
    return $repetidos;
}
 
function valoresrepetidos2($vetor){
        $repetidos = array_count_values($vetor);
        foreach ($repetidos as $posicao => $valor){
            if ($valor > 1) {
                echo "[$posicao]";
            }
            echo "[$posicao] -> $valor vezes repetidos<br>";
        }
    
}

/*
Fun��es

in_array = Checa se um valor existe em um array;

foreach = O construtor foreach fornece uma maneira f�cil 
de iterar sobre arrays. O foreach funciona somente em arrays 
e objetos, e emitir� um erro ao tentar us�-lo em uma vari�vel 
com um tipo de dado diferente ou em uma vari�vel n�o inicializada.

foreach (array_expression as $value)
    statement
    
A segunda forma var, adicionalmente, atribuir 
a chave do elemento corrente a vari�vel $key a cada itera��o.    

foreach (array_expression as $key => $value)
    statement


array_count_values = Conta todos os valores de um array;
rand =  Gera um inteiro aleat�rio;
array_unique = Remove os valores duplicados de um array;
isset — Informa se a vari�vel foi iniciada;
*/
?>