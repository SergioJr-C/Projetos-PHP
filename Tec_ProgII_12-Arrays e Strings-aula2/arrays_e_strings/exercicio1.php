<?php
$string1 = $_POST["texto1"];
$string2 = $_POST["texto2"];
$string3 = $_POST["texto3"];

$juncao = $string1 . $string2 . $string3;

echo "<h1>Strings separadas: <br>";
echo "<br>String 1: $string1";
echo "<br>String 2: $string2";
echo "<br>String 3: $string3";
echo "<br>";

echo "<br>Concatenação das Strings:<br> $juncao";