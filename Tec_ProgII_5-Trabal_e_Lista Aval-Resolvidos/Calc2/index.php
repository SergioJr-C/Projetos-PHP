<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Verifique:</title>
</head>
<body>
	<?php 
		  include_once 'programa.php';
		  $executar = false;
		  if(isset($_POST["v1"]) && isset($_POST["v2"]) && isset($_POST["operacao"])){
    		  $valor1 = $_POST["v1"];
    		  $valor2 = $_POST["v2"];
    		  $op = $_POST["operacao"];
    		  $executar = true;
		  }
    ?>
    		  
	<form action="#" method="POST">
		Digite o valor 1: <input type="text" name="v1"><br> 
		Digite o valor 2: <input type="text" name="v2"><br> 
		<input type="submit" name="operacao" value="+">
		<input type="submit" name="operacao" value="-">
		<br>
		<input type="submit" name="operacao" value="*">
		<input type="submit" name="operacao" value="/">
		<br>
		
		<?php 
		if($executar){
		 	echo 'Resultado: <input type="text" name="resultado" value="'.calculadora($valor1,$op,$valor2) .'">';		 
		}else{
		  echo 'Resultado: <input type="text" name="resultado">';  		 
		}
		
		?>
		
		<br>
		
	</form>
</body>
</html>