<?php

$ava1 = $_POST["ava1"];
$ava2 = $_POST["ava2"];
$ava3 = $_POST["ava3"];
$ava4 = $_POST["ava4"];

$media = ($ava1+$ava2+$ava3+$ava4)/4;

echo "A média do Aluno é de: $media pontos";

/*calcular a média de um aluno
 * 4 avaliações 
 * média aritmética final das 4
 * 
 * */