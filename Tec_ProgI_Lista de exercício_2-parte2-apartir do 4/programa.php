<?php

      $valor = $_POST["valor"];
      
      if($valor%2==0){
          echo "O número $valor é par";
      }else{
          echo "O número é ímpar!";
      }
