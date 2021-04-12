<?php
   
    include_once 'funcoes.php';    
    include 'data.php';
    
    $dn = $_POST["dn"];
    
    $nome = $_POST["nome"];
        
    $nota1 = $_POST["nota1"];
    
    $nota2 = $_POST["nota2"];
    

    $idade = calcular_idade($dn);
    $media = calcular_media ($nota1, $nota2);
    imprimir($nome,$idade,$media);
    

   