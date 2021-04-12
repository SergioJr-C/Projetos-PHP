<?php

$largura = $_POST["largura"];
$profundidade = $_POST["profundidade"];
$altura = $_POST["altura"];

$Volume = round($largura*$profundidade*$altura);

echo "O Volume da caixa é de: $Volume"; 

/*algoritmo que leia as medidas de uma caixa
 * calcular e mostrar o seu volume
 * fórmula:volume= largura*profundidade*altura
 *  */