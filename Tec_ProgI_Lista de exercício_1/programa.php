<?php
      $num = $_POST["numero"];
      
      $maiorq = ($num)/2;
      
      if ($num < 20){
          echo "O número $num é menor que 20";
      }else{
         echo"O $num é maior que 20: $maiorq";
      }
      

 