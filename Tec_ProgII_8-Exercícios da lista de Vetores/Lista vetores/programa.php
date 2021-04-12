<?php
if(isset($_POST["ex1"])){
    $vetor = gerarVetor(20);
    imprimirVetor($vetor);
    
    $vetor = removerNegativos($vetor);
    imprimirVetor($vetor);
    
    $vetor = removerPares($vetor);
    imprimirVetor($vetor);
}
function removerPares($vetor){
    foreach ($vetor as $posicao => $elemento){
        if($elemento %2==0){
            $vetor[$posicao] = 0;
        }
    }
    return $vetor;
}


function removerNegativos($vetor){
    for($cont=0; $cont<count($vetor); $cont++){
        if($vetor[$cont] < 0){
            $vetor[$cont] = 0;
        }
    }
    return $vetor;
}

function gerarVetor($tamanho){
    $vetor = array();
    for($cont=0; $cont<$tamanho; $cont++){
        $vetor[] = rand(0, 5);
    }
    return $vetor;
}

function imprimirVetor($vetor){
    echo "<br>";
    foreach ($vetor as $elemento){
        echo "[$elemento] ";
    }
    echo "<br>";
}
?>