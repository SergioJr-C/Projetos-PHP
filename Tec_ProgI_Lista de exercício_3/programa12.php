<?php

$n1 = $_POST["valor1"];

$fatorial = 1;
for ($i = $n1 ; $i >= 1; $i--) {
    $fatorial = $fatorial * $i;
}


echo "<h1>O Fatorial do número $n1 é $fatorial<h1>";



//o contador começa com o n digitado e vai até 1 e termina com --