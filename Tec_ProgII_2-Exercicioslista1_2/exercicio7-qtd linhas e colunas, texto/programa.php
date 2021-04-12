<?php

$linhas = $_POST["qtdlinhas"];
$colunas = $_POST["qtdcolunas"];
$texto = $_POST["texto"];

tabela($colunas, $linhas, $texto);

function tabela($colunas, $linhas, $texto) {
    echo "<table border=1>";
     for ($l = 1; $l < $linhas; $l++) {
       echo "<tr>";  
       for ($c = 1; $c < $colunas; $c++) {
           echo "<td> $texto</td>";
       }echo "</tr>";
     }echo "</table>";     
}

?>

