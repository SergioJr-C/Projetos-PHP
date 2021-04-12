<?php

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    
    $x1 = ((-$b + sqrt($b*$b - 4*$a*$c))/2*$a);
    
    $x2 = ((-$b - sqrt($b*$b - 4*$a*$c))/2*$a);
       
    //exemplo para testar  
    //As raízes da equação do 2º grau x² – 10x + 24 = 0, por exemplo, são x = 4 ou x = 6