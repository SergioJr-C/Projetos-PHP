<?php

$vetor = $_POST['vetor'];


$pares = 0;
$impares = 0;
foreach ($vetor as $elemento){
    if($elemento %2==0){
        echo "[$elemento]";
        $pares++;
    }else{
        if($elemento %2 !=0){
            echo "[$elemento]";
            $impares++;
        }       
    } 
}
echo "<br>havia $pares valores pares no Vetor";
echo "<br>havia $impares valores ímpares no Vetor";