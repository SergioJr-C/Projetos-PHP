<?php
include_once 'programa.php';

    if (isset($_POST["ex3"])) {
        $impares = gerarvetoresimpares(10);
        imprimirvetor($impares);
    }
    
    
function gerarvetoresimpares($tamanho) {
    $vetor = array();
    for ($i = 0; $i<$tamanho*2; $i++) {
        if($i %2 != 0){
            $vetor [] = $i;
        }
    }
    return $vetor;
}
/*
 * 
 */

?>

