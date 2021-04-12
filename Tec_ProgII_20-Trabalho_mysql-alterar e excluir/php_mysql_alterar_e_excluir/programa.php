<?php

function conectar($banco){
    return new PDO("mysql:host=localhost; 
                dbname=$banco;", "root", "");
}

function inserir($nome, $email, $cargo){
    $con = conectar("agenda");
    $inserir = $con->prepare("insert into 
        Funcionario (nome, email, cargo) values
        (:nome, :email, :cargo)");    
    $inserir->bindValue(":nome", $nome);
    $inserir->bindValue(":email", $email);
    $inserir->bindValue(":cargo", $cargo);
    $inserir->execute();
}



function listarFuncionariosNoCombo(){
    echo '<form name="e" action="programa.php" method="post">
          <select name="combo">          
              <option value="0"> Primeira Opção </option>';    
    $con = conectar("agenda");
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
}

function consultarFormulario($nome){
    $con = conectar("agenda");
    $select = $con->prepare("select * from Funcionario where nome = :nome");
    $select->bindValue(":nome", $nome);
    $select->execute();
    $dados = $select->fetch();
    ?>
    <h1>Alterar Cadastro de Funcionário</h1>
    <form name="e" action="programa.php" method="post">
    ID: 
    <input type="text" name="id" value="<?php echo $dados["id"]?>" readonly="readonly"> 
    <br> Nome: 
    <input type="text" name="nome" value="<?php echo $dados["nome"]?>"> 
    <br> E-mail: 
    <input type="text" name="email" value="<?php echo $dados["email"]?>"> 
    <br> Cargo:
    <input type="text" name="cargo" value="<?php echo $dados["cargo"]?>"> 
    <br> <br>   
    <input type="submit" value="Alterar" name="alterar">
       
    <input type="submit" value="Excluir" name="excluir">
    </form>   
    <?php     
}

function excluir($id){
    $con = conectar("agenda");
    $delete = $con->prepare("DELETE from Funcionario where id = :id");
    $delete->bindValue(":id", $id);
    if($delete->execute()){
        echo "<h1>Registro Excluído com Sucesso!</h1>";
    }
}

function alterar($id, $nome, $email, $cargo){
    $con = conectar("agenda");
    $update = $con->prepare("UPDATE Funcionario SET nome = :nome,
 email = :email, cargo = :cargo WHERE id = :id");
    $update->bindValue(":id", $id);
    $update->bindValue(":nome", $nome);
    $update->bindValue(":email", $email);
    $update->bindValue(":cargo", $cargo);    
    if($update->execute()){
        echo "<h1>Registro Alterado com Sucesso!</h1>";
    }
}



function consultar($nome){
    $con = conectar("agenda");
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
    $con = conectar("agenda");
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






/*


$select = $con->prepare("select * from funcionario");
$select->execute();
$funcionarios = $select->fetchAll();

echo "<table border=1><tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Cargo</th></tr>";
foreach ($funcionarios as $linha){
    echo "<tr>";
    echo "<td>" . $linha["id"] . "</td>";
    echo "<td>" . $linha["nome"] . "</td>";
    echo "<td>" . $linha["email"] . "</td>";
    echo "<td>" . $linha["cargo"] . "</td>";
    echo "</tr>";
}
echo "</table>";


//$inserir = $con->prepare("insert into funcionario (nome, email, cargo) values (:nome, :email, :cargo)");
//$inserir->bindValue(":nome", "Liliquinha de Estimacao");
//$inserir->bindValue(":email", "liliquinha@estimacao.com");
//$inserir->bindValue(":cargo", "Diversao");
//$inserir->execute();
*/