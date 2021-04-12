<?php

$n = $_POST['valor1'];

for ($i = 0; $i <= 10; $i++) {
    $tabuada = $n * $i;
    echo "<h1>$n X $i = $tabuada </h1>";
}

/*

5 * 1 = 5
5 * 2 = 10
5 * 3 = 15
5 * 4 = 20
...
5 * 10 = 50  
  
 
 */