<?php
$nome1 = $_POST["nome1"];
$salario1 = $_POST["salario1"];

$nome2 = $_POST["nome2"];
$salario2 = $_POST["salario2"];

$nome3 = $_POST["nome3"];
$salario3 = $_POST["salario3"];

$nome4 = $_POST["nome4"];
$salario4 = $_POST["salario4"];

$nomes = array($nome1, $nome2, $nome3, $nome4);

$salario = array($salario1, $salario2, $salario3, $salario4);

echo "<h1>Salários Abaixo que R$ 700,00";

echo "<table border=1px>
<tr>
<td><b>Nome</td>
<td><b>Salário</td>
</tr>";

foreach ($nomes as $elemento => $ns) {
    if($salario[$elemento] < 700){
        echo "<tr><td>$ns</td><td>R$ $salario[$elemento]";
    }
    
}

