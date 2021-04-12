<!DOCTYPE html>
<html>
<head>
<style>
body{
text-align: center;
}
<meta charset="<utf-8">
<title>Trabalho Prático 2</title>
</style>
</head>
<body>
<h1>Consulta de Alunos</h1>

<?php 
//include_once 'questao4.php';
//formulario();
?>

        <h1>Digite para consultar o nome do aluno: </h1>
        <form action='questao4.php' method="post">
        <input id="campopesquisa" type="text" name="campopesquisa" size="50">
       	<br>
    	<br>
  		<input type='submit' name='botao2' value='Consultar'>
       	</form>
       	
       	
       	<br><br><form action='questao1.php'>
     <input name='Voltar' type='submit' value='Voltar' />
        </form>
        <br>
        <br>
       	
</body>
</html>