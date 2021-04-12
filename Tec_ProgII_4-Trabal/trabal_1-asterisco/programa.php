<?php

/*exibir nomes separados por linhas formadas
 * por 25 asteriscos, usando laço de repetição;
 * imprimir 5 nomes quaisquer;
 */


linha();

function linha() {
    
    for ($i = 0; $i < 5%2; $i++) {
        echo "Alison";
        echo "<br>*************************<br>";
        echo "Morgana";
        echo "<br>*************************<br>";
        echo "Letícia";
        echo "<br>*************************<br>";
        echo "Drica";
        echo "<br>*************************<br>";
        echo "Leonardo";
        echo "<br>*************************<br>";
    };
}

