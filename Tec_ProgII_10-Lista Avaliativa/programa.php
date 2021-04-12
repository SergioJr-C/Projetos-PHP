<?php
$uniCur = array(
    'Programação para Web',
    'Programação Orientada a Objetos',
    'Análise de Sistemas',
    'Redes de Computadores'
);

$mediaSem = array(
    9.2,
    7.5,
    8.1,
    9.5
);

echo "<table border=1px>
<tr>
<td>Unidade Curricular</td>
<td>Média Semestral</td>
</tr>";

foreach ($uniCur as $posicao => $uniC) {
    echo "<tr><td>$uniC</td><td>$mediaSem[$posicao]</td></tr>";
}

echo "</table>";
?>