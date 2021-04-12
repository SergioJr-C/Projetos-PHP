<?php
$num = $_POST["num"];

verificar($num);

function verificar($num) {
    if($num > 0){
      echo "<h1>Número é Válido</h1>";
      $cubo = pow($num,3);
      echo "<h1>O cálculo de $num ao cubo é de: $cubo</h1><br>";
    }else{
          "<h1>Número não é Válido</h1><br>";
      }
}






/*Criar uma função que receba de um formulário--digitado--qualquer valore calcule
 * e escreva o valor do cubo deste número ou seja x³.
 * testar se é válido
 * 
 */