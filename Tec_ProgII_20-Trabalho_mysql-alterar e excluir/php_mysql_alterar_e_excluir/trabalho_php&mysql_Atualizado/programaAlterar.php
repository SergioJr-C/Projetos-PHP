<?php
function conectar($banco) {
    return new PDO("mysql:host=localhost;dbname=$banco","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}


function inserir($nome, $email, $cargo){
    $con = conectar("agendap");
    $inserir = $con->prepare("insert into
        Funcionario (nome, email, cargo) values
        (:nome, :email, :cargo)");
    $inserir->bindValue(":nome", $nome);
    $inserir->bindValue(":email", $email);
    $inserir->bindValue(":cargo", $cargo);
    $inserir->execute();
}



function listarFuncionariosNoCombo(){
    echo '<form name="e" action="programaAlterar.php" method="post">
          <select name="combo">
              <option value="0"> Primeira Opção </option>';
    $con = conectar("agendap");
    $select = $con->prepare("select nome from Funcionario");
    $select->execute();
    $nomes = $select->fetchAll();
    foreach($nomes as $elemento){
        echo '<option value="'.$elemento["nome"].'">
                '.$elemento["nome"].'</option>';
    }
    echo '</select><br><br>
          <input type="submit" value="Consultar">
        </form>';
    echo "<br>";
    echo '<form name="e" action="index.php" method="post">
        <input type="submit" value = "Voltar"></form>';
}

function consultarFormulario($nome){
    $con = conectar("agendap");
    $select = $con->prepare("select * from Funcionario where nome = :nome");
    $select->bindValue(":nome", $nome);
    $select->execute();
    $dados = $select->fetch();
    ?>
    <html>
	<head>
    <Style>
    body{
    background-image: url(background-cinza.png);
text-align: center;
}
</style> 
    <h1>Alterar Cadastro de Funcionário</h1>
    <form name="e" action="programaAlterar.php" method="post">
    ID: 
    <input type="text" name="id" value="<?php echo $dados["id"]?>" readonly="readonly"> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    Nome: 
    <input type="text" name="nome" value="<?php echo $dados["nome"]?>"> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    E-mail: 
    <input type="text" name="email" value="<?php echo $dados["email"]?>"> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    Cargo:
    <input type="text" name="cargo" value="<?php echo $dados["cargo"]?>"> 
    <br> <br>   
    <input type="submit" value="Alterar" name="alterar">
       
    <input type="submit" value="Excluir" name="excluir">
    </form>  
    <?php     
}

function excluir($id){
    $con = conectar("agendap");
    $delete = $con->prepare("DELETE from Funcionario where id = :id");
    $delete->bindValue(":id", $id);
    if($delete->execute()){
        echo '<style>
    body{
    background-image: url(background-cinza.png);
    text-align: center;
}';
        echo '</style>';
        echo "<h1>Registro Excluído com Sucesso!</h1>";
        
    }
}

function alterar($id, $nome, $email, $cargo){
    $con = conectar("agendap");
    $update = $con->prepare("UPDATE Funcionario SET nome = :nome,
 email = :email, cargo = :cargo WHERE id = :id");
    $update->bindValue(":id", $id);
    $update->bindValue(":nome", $nome);
    $update->bindValue(":email", $email);
    $update->bindValue(":cargo", $cargo);    
    if($update->execute()){
        echo '<style>
    body{
    background-image: url(background-cinza.png);
    text-align: center;
}';
        echo '</style>';
        echo "<h1>Registro Alterado com Sucesso!</h1>";
    }
}



function consultar($nome){
    $con = conectar("agendap");
    $select = $con->prepare("select * from Funcionario where nome = :nome");
    $select->bindValue(":nome", $nome);
    $select->execute();
    $dados = $select->fetch();
    echo "ID: " . $dados["id"] . "<br>";
    echo "Nome: " . $dados["nome"] . "<br>";
    echo "E-mail: " . $dados["email"] . "<br>";
    echo "Cargo: " . $dados["cargo"] . "<br>";
    
   
}

function listarTodos(){
    $con = conectar("agendap");
    $select = $con->prepare("select * from 
            funcionario");
    $select->execute();
    $funcionarios = $select->fetchAll();
    foreach ($funcionarios as $linha){
    echo "ID: " . $linha["id"] . "<br>";
    echo "Nome: " . $linha["nome"] . "<br>";
    echo "E-mail: " . $linha["email"] . "<br>";
    echo "Cargo: " . $linha["cargo"] . "<br><br>";    
    }    
}

/*
if(isset($_POST["botao"])){
    if(!empty($_POST["nome"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["cargo"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cargo = $_POST["cargo"];
        inserir($nome, $email, $cargo);
        listarTodos();
    }else{
        echo '<script>
            alert("Preencha todos os campos!");
            window.location.href="index.php";            
            </script>';
    }
}
/**/



if(isset($_POST["combo"])){
    $nome = $_POST["combo"];
    consultarFormulario($nome);
    echo '<form name="e" action="index.php" method="post">
        <input type="submit" value = "Voltar"></form>';
}else{
    if(isset($_POST["alterar"])){
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cargo = $_POST["cargo"];
        alterar($id, $nome, $email, $cargo);
        echo '<form name="e" action="index.php" method="post">
        <input type="submit" value = "Voltar"></form>';
    }else{
        if(isset($_POST["excluir"])){
            $id = $_POST["id"];
            excluir($id);
            echo '<form name="e" action="index.php" method="post">
        <input type="submit" value = "Voltar"></form>';
        }
    }
}



/*
function encerrar(){
    return null;
}

if(isset($_POST['combo'])){
    $op = $_POST['combo'];
    if($op != "0"){
       consultarNome($op); 
    }
    echo '<br><form name="voltar" method="post" action="index.php">
            <input type="submit" name="botao" value="Voltar"></form>';
}else{
    if (isset($_POST['alterar'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cargo = $_POST['cargo'];
    Alterar($id, $nome, $email, $cargo);
    
    echo '<br><form name="voltar method="post" action="index.php">
            <input type="submit" name="botao value="Voltar"></form>';
    
    }else{
        if (isset($_POST['excluir'])) {
            $id = $_POST['id'];
            excluir($id);
            echo '<br><form name="voltar method="post" action="index.php">
            <input type="submit" name="botao value="Voltar"></form>';
        }
    }
}

function listarFuncionarioNoCombo(){
    echo '<form name="menu" method="post" action="programaAlterar.php">
<select name="nome">
        <option value="0" selected>(selecione um nome)</option>';
    $conexao = conectar("agendap");
    $sql = "SELECT nome FROM Funcionario order by nome";
    $pstmt = $conexao->prepare($sql);
    $pstmt->execute();
    
    while($linha = $pstmt->fetch()){
        echo '<option value="'.$linha["nome"].'">'.$linha["nome"].'</option>';
    }
    
    $conexao = encerrar();
echo '</select> <input type = "submit" value="Consultar" name = "combo"></form>';

}


function consultarNome($nome) {
    $conexao = conectar("agendap");
    $sql = "SELECT * FROM Funcionario where nome = :nome";
    $pstmt = $conexao->prepare($sql);
    $pstmt->bindValue(":nome", $nome);
    $pstmt->execute();
    
    echo "<h2>Registro encontrado com sucesso: </h2>";
    
    echo '<form name "alterar" method="post" action="alterar.php">';
    while ($linha = $pstmt->fetch()) {
        echo 'ID:
        <input type="text" name="id" value="<?php echo $elemento ["id"]?>">
        &nbsp;&nbsp;&nbsp;&nbsp;';
        echo 'Nome:
        <input type="text" name="nome" value="<?php echo $elemento ["nome"]?>">
        &nbsp;&nbsp;&nbsp;&nbsp;';
        echo 'Email:
        <input type="text" name="email" value="<?php echo $elemento ["email"]?>">
        &nbsp;&nbsp;&nbsp;&nbsp;';
        echo 'Cargo:
        <input type="text" name="cargo" value="<?php echo $elemento ["cargo"]?>">
        &nbsp;&nbsp;&nbsp;&nbsp;';
    }
    echo '<input type="submit" name="alterar" value="Alterar">';
    $conexao = encerrar();
}

function Alterar($id, $nome, $email, $cargo) {
    $conexao = conectar("agendap");
    $sql = "UPDATE Funcionario SET nome = :nome, email = :email, cargo = : cargo
WHERE id = :id";
    $pstmt = $conexao->prepare($sql);
    $pstmt->bindValue(":id", $id);
    $pstmt->bindValue(":nome", $nome);
    $pstmt->bindValue(":email", $email);
    $pstmt->bindValue(":cargo", $cargo);
    $pstmt->execute();
    
    echo "<h2>Registro alterado com Sucesso. </h2>";
    $conexao = encerrar();
}

function exluir($id) {
    $conexao = conectar("agendap");
    $sql = "DELETE FROM Funcionario WHERE id = :id";
    $pstmt = $conexao->prepare($sql);
    $pstmt->execute();
    echo "<h2>Registro excluido com sucesso</h2>";
    $conexao = encerrar();
}
/**/

