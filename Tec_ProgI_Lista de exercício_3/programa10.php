<?php

$n1 = $_POST["valor1"];
$n2 = $_POST["valor2"];

$soma = 0; 

   for ($i = $n1; $i <=$n2; $i++) {
       $soma = $soma + $i; 
       if($i%2==0){           
           echo "<h1>Número par: $i<h1>";
       }

   }
   
   for ($i = $n1; $i <=$n2; $i++) {
       $soma = $soma +$i;
       if($i%2!=0){
           echo "<h1>Número ímpar: $i<h1>";
       }
       
   }
echo "<br>Soma dos números = $soma";
   

//Entrada:digitar 2 algoritmos
//saída: mostrar todos os números pares contidos neste intervalo

//saída2: mostrar todos os números ímpares contidos neste intervalo
//saída3: mostrar a soma de todos os números
