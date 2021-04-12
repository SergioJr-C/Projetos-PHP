<!DOCTYPE html>
<html>
<head>
<style>
body{
    background-image: url(background-cinza.png);
text-align: center;
}
<meta charset="utf-8">
<title>PHP E Banco de Dados</title>
</style>
</head>
<body>
<h1>Trabalho Banco de Dados e PHP</h1>
<h1>Cadastro de Funcionários</h1>
<form name="entrada" method="post" action="programaCadastrarFuncionario.php">

Nome: 	<input type="text" Placeholder="* campo obrigatório" name="nome">
&nbsp;&nbsp;&nbsp;&nbsp;

E-mail: <input type="text" Placeholder="* campo obrigatório" name="email">

&nbsp;&nbsp;&nbsp;&nbsp;
Cargo: 	<input type="text" Placeholder="* campo obrigatório" name="cargo">

<br>
<br>
<input type="submit" name="botao" value="Inserir">
<br><br>

</form>

<form action="index.php" method="post">
<input name="Voltar" type="submit" value="Voltar" >
</form>
</body>
</html>