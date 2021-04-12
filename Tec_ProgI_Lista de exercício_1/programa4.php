<?php 


	$valor1 = $_POST ['valor1'];
	$valor2 = $_POST ['valor2'];
	
	$soma = $valor1+$valor2;
	
	if ($soma > 10){
	    echo "O número $soma é maior que 10";
	}