<?php
$string = $_POST["texto1"];
echo "Vetor de Strings : $string";
$vogais = array('a','e','i','o','u');

foreach ($vogais as $letra){
    $vezes = substr_count($string, $letra);
    echo "<br>A quantidade de Vogais $letra é de $vezes vezes<br>";
}

