<html>
<head>
<title>Exercícios</title>
</head>
<body>
	<h1>Exercício 4 - Cálculo do IR</h1>
	<h2> O IR é calculado de acordo com a seguinte tabela:</h2>
	<?php 
	   include_once 'programa.php';	   
	   tabela();
	?>
	<h2> Digite suas informações para calcular seu IR:</h2>
	<form name="entrada" method="post" action="programa.php">
		Nome: <input type="text" name="nome"><br>
		CPF: <input type="text" name="cpf"><br>
		Renda Mensal: <input type="text" name="renda"><br><br>
		<br> <input type="submit" value="Calcular">
	</form>
</body>
</html>