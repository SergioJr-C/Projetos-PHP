<?php

function conectar($banco) {
    return new PDO("mysql:host=localhost;dbname=$banco","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}


function inserir($nome, $email, $cargo) {
    $con = conectar("agendap");
    $inserir = $con->prepare("insert into funcionario(nome, email, cargo)
        values(:nome,:email,:cargo)");
    
    $inserir->bindValue(":nome", $nome);
    $inserir->bindValue(":email", $email);
    $inserir->bindValue(":cargo", $cargo);
    $inserir->execute();
}

function listarCadastro($nome, $email, $cargo) {
    $con = conectar("agendap");
    $select = $con->prepare("SELECT * from funcionario ORDER BY id DESC LIMIT 1");
    $select->execute();
    $dados = $select->fetch();
    
    echo '<style>
    body{
    background-image: url(background-cinza.png);
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
    <td><b>Cargo</td>
    </tr>
    ";
    
    echo "<tr>";
    echo "<td>id: ". $dados["id"] ."</td>";
    echo "<td>Nome: ". $dados["nome"] ."</td>";
    echo "<td>E-mail: ". $dados["email"] ."</td>";
    echo "<td>Cargo: ". $dados["cargo"] ."</td>";
    echo "</tr>";   

    
}

if(isset($_POST["botao"])){
    if(!empty($_POST["nome"]) && !empty($_POST["email"])&&!empty($_POST["cargo"])){
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cargo = $_POST["cargo"];
        inserir($nome, $email, $cargo);
        listarCadastro($nome, $email, $cargo);
    }else{
        echo '<script>
              alert("Preencha todos os Campos!");
              window.location.href="CadastrarFuncionario.php";
              </script>';
    }
    
    echo"<br><br><form action='CadastrarFuncionario.php'>
     <input name='Voltar' type='submit' value='<-' />
        </form>
        <br>
        <br>";

   
    
}



//

