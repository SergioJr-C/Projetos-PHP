<?php
    include_once 'funcoes.php';
    
    $num = $_POST["num"];
    
    criar_tabela($num);
    
    deixar_bonita();
    
    $hoje = retorna_data();
    echo $hoje;
    
    verificar_valorassociado($num);
    