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
<h1>Trabalho Prático 2</h1>
<h1>Inserir dados do Aluno: </h1>
<form name="entrada" method="post" action="questao2.php">

Nome: 	<input type="text" Placeholder="Ex: Fulano " name="nome">
&nbsp;&nbsp;&nbsp;&nbsp;

E-mail: <input type="text" Placeholder="Ex: aluno@gmail.com " name="email">

&nbsp;&nbsp;&nbsp;&nbsp;
Turma: 	<input type="text" Placeholder="Ex: Info40 " name="turma">

<br>
<br>
<input type="submit" name="botao" value="Cadastrar">
<br><br>
</form>
<h1>Consulta de Alunos: </h1>
<br><form action='questao3indexConsultar.php'>
     <input name='consultar' type='submit' value='Consultar' />
        </form>
        <br>
        <br>
        
</body>
</html>