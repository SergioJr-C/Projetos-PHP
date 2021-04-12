<?php

function conectar($banco) {
    return new PDO("mysql:host=localhost;dbname=$banco","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}


function inserir($nome, $email, $turma) {
    $con = conectar("bdalunos");
    $inserir = $con->prepare("insert into alunos(nome, email, turma)
        values(:nome,:email,:turma)");
    
    $inserir->bindValue(":nome", $nome);
    $inserir->bindValue(":email", $email);
    $inserir->bindValue(":turma", $turma);
    $inserir->execute();
}


function listarCadastro($nome, $email, $turma) {
    $con = conectar("bdalunos");
    $select = $con->prepare("SELECT * from alunos ORDER BY id DESC LIMIT 1");
    $select->execute();
    $dados = $select->fetch();
    
    echo '<style>
    body{
    
text-align: center;
}
    table {
        
}
        
    table, td, th {
	text-align: center;
}';
    
    echo '</style>';
    
    echo "<table border=1px align='center'>
        
    <tr>
    <td><b>Id</td>
    <td><b>Nome</td>
    <td><b>Email</td>
    <td><b>turma</td>
    </tr>
    ";
    
    echo "<tr>";
    echo "<td> "."<p style='color: #FF0000;'>".$dados["id"] ."</td>";
    echo "<td> "."<p style='color: #3333ff;'>". $dados["nome"] ."</td>";
    echo "<td> "."<p style='color: #3333ff;'>". $dados["email"] ."</td>";
    echo "<td> "."<p style='color: #3333ff;'>". $dados["turma"] ."</td>";
    echo "</tr>";   
    
}



if(isset($_POST["botao"])){
    if(!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["turma"])){
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $turma = $_POST["turma"];
        inserir($nome, $email, $turma);
        listarCadastro($nome, $email, $turma);
    }else{
        echo '<script>
              alert("Preencha todos os Campos!");
              window.location.href="questao1.php";
              </script>';
    }
    
    echo"<br><br><form action='questao1.php'>
     <input name='Voltar' type='submit' value='Voltar' />
        </form>
        <br>
        <br>";       
}