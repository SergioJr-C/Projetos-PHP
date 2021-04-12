<!DOCTYPE html>
<html>
<head>
<style>
body{
text-align: center;
}
<meta charset="utf-8">
<title>PHP E Banco de Dados</title>
</style>
</head>
<body>
<h1>Prova Final</h1>
<h1>Controle de Exercícios Diários: </h1>
<form name="entrada" method="post" action="inserir.php">

Data: 	<input type="text" Placeholder=" Ano/Mês/Dia " name="data">
&nbsp;&nbsp;&nbsp;&nbsp;

Tipo: <input type="text" Placeholder=" " name="tipo">

&nbsp;&nbsp;&nbsp;&nbsp;
Duração: 	<input type="text" Placeholder=" " name="duracao">

<br>
<br>
<input type="submit" name="botao" value="Cadastrar">
<br><br>
</form>

<h1>Consulta os Dados: </h1>
<br><form method="post" action='listar.php'>
     <input name='Consultar' type='submit' value='Consultar' />
        </form>
        <br>
        <br>
        
</body>
</html>



