<?php 

	$n1 = $_POST["nota1"];
	$n2 = $_POST["nota2"];
	$peso1 = $_POST["peso1"];
	$peso2 = $_POST["peso2"];
	
	$somadospesos = $peso1+$peso2;
	
	$mediaponderada = ($n1*$peso1 + $n2*$peso2)/$somadospesos;
	
	echo "A média é : $mediaponderada";
	
	if($mediaponderada>=7){
	    echo "<H1>APROVADO<H1>";
	}else{
	    "<h1>REPROVADO<h1>";
	}
	
	//duas notas e seus pesos, relativos a programação II e o nome do aluno
?>

