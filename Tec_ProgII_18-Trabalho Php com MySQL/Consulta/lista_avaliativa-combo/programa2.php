<?php
if(isset($_POST["ex2"])){
    $unidadeCurricular = array('Programação para Web', 
'Programação Orientada a Objetos',
'Ánalise de Sistemas', 'Redes de Computadores');
    $mediaSemestral = array(9.2,7.5,8.1,9.5);
    
    echo "<table border=1px>
<tr>
<td><b>Unidade Curricular</td>
<td><b>Média Semestral</td>
</tr>";
    
    echo ArmazenarDados($unidadeCurricular, $mediaSemestral);
}

function ArmazenarDados($unidadeCurricular, $mediaSemestral) {
    foreach ($unidadeCurricular as $elemento => $unidade) {
        echo "<tr><td>$unidade</td><td>$mediaSemestral[$elemento]</td></tr>";
    }
    echo "</table>";
}