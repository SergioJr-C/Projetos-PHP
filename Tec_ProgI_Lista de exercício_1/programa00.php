<?php

    $valor = $_POST['valor'];

    if($valor <= 900){
        $aumento = $valor*0.05;
        $aumento2 = $valor*1.05;
       
        echo "<br>O valor do salário atual é de: $valor";
        echo "<br>O valor do aumento é de: $aumento";
        echo "<br>Novo salário: $aumento2";
        
    }elseif(($valor > 900) && ($valor <= 1400)){
        $aumento = $valor*0.08;
        $aumento2 = $valor*1.08;
       
        echo "<br>O valor do salário atual é de:$valor";
        echo "<br>O valor do aumento é de:$aumento";
        echo "<br>Novo salário:$aumento2";
        
    }elseif(($valor > 1400)){
        $aumento = $valor*0.10;
        $aumento2 = $valor*1.10;
       
        echo "<br>O valor do salário atual é de:$valor";
        echo "<br>O valor do aumento é de:$aumento";
        echo "<br>Novo salário:$aumento2";
    }
    

//exibir o salário atual, o aumento e o novo salário
//salário1(900 inclusive+0,05(5%))
//salário2(900 a 1,400 8%)
//salario3(acima de 1400 inclusive 10%)