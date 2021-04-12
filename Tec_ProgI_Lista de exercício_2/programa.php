<?php
 
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];

        
        $soma = number_format(($valor1+$valor2), 2,',','.');
        
        echo "O Valor total das compras é de R$ $soma";