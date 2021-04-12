<?php



        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        
        $diferenca = $valor1-$valor2;
        
        if ($valor1 > $valor2) {
            echo "<br>O Valor $valor1 é o Número Maior";
        }else{
            echo "<br>O Valor $valor1 é o Número Menor";
        }if ($valor2 > $valor1){
            echo "<br>O Valor $valor2 é o Número Maior";
        }else{
            echo "<br>O Valor $valor2 é o Número Menor";
        }
        
        echo "<br>A diferença entre o $valor1 e $valor2 resulta em: $diferenca";