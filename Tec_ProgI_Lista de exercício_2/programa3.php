<?php


        $mes = $_POST['mes'];
        
        $pcmontados = ($mes*90*27);
        
        
        echo "A Quantidade de computadores montados é a de: $pcmontados";
        
        if ($pcmontados < 4000){
            echo "<br>O número de computadores Montados está abaixo de 4000, pois foram montados $pcmontados";
        }