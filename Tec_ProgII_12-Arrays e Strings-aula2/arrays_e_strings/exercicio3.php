<?php

$string = $_POST["texto1"];

$vetordePalavrasExplodida = explode(' ', $string);

//$vetordePalavrasImplodida = implode(', ', $vetordePalavrasExplodida);
// $quantidade = 0;
// foreach ($vetordePalavrasImplodida as $palavras) {
//     $quantidade = substr_count($palavras);
//     return $quantidade;
// }

echo "Quantidade de palavras é " . count($vetordePalavrasExplodida);