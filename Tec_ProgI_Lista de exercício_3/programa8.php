<?php

$soma = 0;

 for ($i = 3; $i <=21; $i++) {
    if($i %2 == 0){
          $soma = $soma+$i;
          echo "<h1>Números pares: $i<h1>";
     }
  
}
echo "<h1>Soma dos números pares: $soma<h1>";

//soma é igual a soma+i;
//for começa em 3 e termina em 31