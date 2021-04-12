<?php
    
      $valor1 = $_POST['valor1'];

      
      if ($valor1 % 0) {
          echo "O $valor1 é par";
      }else{
          echo "O $valor1 é ímpar";
      
      }
