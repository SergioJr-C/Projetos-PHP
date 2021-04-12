<?php
include_once 'programa.php';

if(isset($_POST["ex7"])){
    $vetor  =  salario_atletas(10);
    imprimirvetor($vetor);
	
    $salario = rand(900, 1900);
    
	salario_atletas($salario);
	
	function salario_atletas ($salario){
		$media = $salario/10;
		echo $media;
	}
	
}
?>	

	