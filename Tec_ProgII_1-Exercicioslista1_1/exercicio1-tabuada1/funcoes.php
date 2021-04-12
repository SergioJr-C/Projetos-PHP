<?php

function calcular_tabuada ($num){
    echo '<style type="text/css">
            td {
                font-size: 30px;
                text-align:center;
                color:blue;
                background-color: black;
            }
        
            td:hover{
                color:red;
                background-color: yellow;
            }
        </style>';
    echo "<table border='1'>";
        echo "<tr><td colspan=3> TABUADA DO $num</td></tr>";
    
    for ($i = 1; $i <= 10; $i++) {
        $t = $num * $i;
        echo "<tr><td>A Tabuada do $num : $num * $i = $t";
    }
    echo "</table>";
}