<?php


function calcular_tabuada($n){
    echo '<style type="text/css">
td {
text-align:center;
}
</style>';

    echo "<table border='1'>";
    echo "<tr><td colspan=3> TABUADA DO $n</td></tr>";
    for ($i = 0; $i <= 10; $i++) {
        $tabuada = $n * $i;
        echo "<tr><td>$n X $i</td><td> = </td><td>$tabuada</td></td>";
    }
    echo "</table>";
}
?>