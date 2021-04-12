<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>FUNCIONÁRIOS:</title>
</head>
<body>
<h1>Lista Avaliativa Sobre Vetores - Exercício 3</h1>
<h1>Verificar Salário dos Funcionários!</h1>
	<form action="programa3.php" method="POST">
		<?php 
		echo"Funcionário 1:";
		echo"<br>";
		?>
		Nome: <input type="text" name="nome1"><br> 
		Salário: <input type="text" name="salario1"><br> 
		<br>
		<?php 
		echo"Funcionário 2:";
		echo"<br>";
		?>
		Nome: <input type="text" name="nome2"><br> 
		Salário: <input type="text" name="salario2"><br> 
		<br>
		<?php 
		echo"Funcionário 3:";
		echo"<br>";
		?>
		Nome: <input type="text" name="nome3"><br> 
		Salário: <input type="text" name="salario3"><br> 
		<br>
		<?php 
		echo"Funcionário 4:";
		echo"<br>";
		?>
		Nome: <input type="text" name="nome4"><br> 
		Salário: <input type="text" name="salario4"><br> 
		<br>
		
		<input type="submit" value="Executar">
	</form>
</body>
</html>
