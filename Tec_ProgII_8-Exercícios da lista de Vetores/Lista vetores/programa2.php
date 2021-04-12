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
Funções

in_array = Checa se um valor existe em um array;

foreach = O construtor foreach fornece uma maneira fácil 
de iterar sobre arrays. O foreach funciona somente em arrays 
e objetos, e emitirá um erro ao tentar usá-lo em uma variável 
com um tipo de dado diferente ou em uma variável não inicializada.

foreach (array_expression as $value)
    statement
    
A segunda forma var, adicionalmente, atribuir 
a chave do elemento corrente a variável $key a cada iteração.    

foreach (array_expression as $key => $value)
    statement


array_count_values = Conta todos os valores de um array;
rand =  Gera um inteiro aleatório;
array_unique = Remove os valores duplicados de um array;
isset â€” Informa se a variável foi iniciada;
*/
?>