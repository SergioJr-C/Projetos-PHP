<?php

      $valor = $_POST["valor"];
      
      if($valor%2==0){
          echo "O n�mero $valor � par";
      }else{
          echo "O n�mero � �mpar!";
      }
