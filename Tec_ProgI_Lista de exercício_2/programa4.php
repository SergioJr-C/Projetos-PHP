<?php
    
      $valor1 = $_POST['valor1'];

      
      if ($valor1 % 0) {
          echo "O $valor1 � par";
      }else{
          echo "O $valor1 � �mpar";
      
      }
