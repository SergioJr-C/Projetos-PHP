<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Verifique: </title>
</head>
<body>
<h1>Verifique: </h1>
<?php 
include_once 'funcoes.php';
tabela();
?>
<form action="programa.php" method="POST">
	<label for="ano"> Verifique o ano: </label> <input type="text" name="ano"><br>
	<input type="submit" value="Verificar">
</form>
</body>
</html>