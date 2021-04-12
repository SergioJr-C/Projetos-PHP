<?php

function conectar($banco)
{
    return new PDO("mysql:host=localhost;dbname=$banco", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

function formulario()
{
    echo "<form action='programaConsultarUsuario.php' method='post'>";
    echo "<select name='comboNome' id='cn' onClick='limparCargo(); return false;'> <option value='0'> Consultar por nome</option>";
    $con = conectar("locadora");
    $select = $con->prepare("SELECT  nome FROM usuario");
    $select->execute();
    $cadastro = $select->fetchAll();
    
    foreach ($cadastro as $elemento){
        echo '<option value="'.$elemento["nome"].'">'.$elemento["nome"].'</option>';
    }
    
    echo '</select>';
    
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo '<script>
    function limparCargo(){
        document.getElementById("cc").getElementsByTagName("option")[0].selected = "selected";
    }
    function limparNome(){
        document.getElementById("cn").getElementsByTagName("option")[0].selected = "selected";
    }
    </script>';
    echo "<select name='comboEmail' id='cc' onClick='limparNome(); return false;'> <option value='0'> Consultar por email</option>";
    $con = conectar("locadora");
    $select = $con->prepare("SELECT  email FROM usuario");
    $select->execute();
    $cadastro = $select->fetchAll();
    
    foreach ($cadastro as $elemento){
        
        echo '<option value="'.$elemento["email"].'">'.$elemento["email"].'</option>';
    }
    
    echo '</select>';
    
    echo'<br>';
    echo"<br>";
    echo"<input type='submit' name='botao' value='Consultar'>
       </form>";
}

function consultarNome($nome){
    $con = conectar("locadora");
    $select = $con->prepare("select * from usuario where nome = :nome");
    $select->bindValue(":nome", $nome);
    $select->execute();
    $dados = $select->fetch();
    
    echo '<style>
    body{
    background-image: url(banner.png);
        background-position: top center; 
        background-repeat: no-repeat;
        text-align: center;
        background-color: #99ccff;
}
    table {
        
}
        
    table, td, th {
	text-align: center;
}';
    
    echo '</style>';
    
    echo "<table border=1px align='center'>
        
    <tr>
    <td><b>id_usuario</td>
    <td><b>Cpf</td>
    <td><b>Nome</td>
    <td><b>Email</td>
    <td><b>Cargo</td>
    </tr>
    ";
    echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
    echo "<tr>";
    echo "<td>id_usuario: ". $dados["id_usuario"] ."</td>";
    echo "<td>cpf: ". $dados["cpf"] ."</td>";
    echo "<td>Nome: ". $dados["nome"] ."</td>";
    echo "<td>E-mail: ". $dados["email"] ."</td>";
    echo "<td>Cargo: ". $dados["cargo"] ."</td>";
    echo "</tr>";
    
    echo"<form>
     <input name='botao' type='submit' value='Voltar' action='indexConsultarUsuario.php' />
        </form>
        <br>
        <br>";
    
}

function ConsultarEmail($email) {
    $con = conectar("locadora");
    $select = $con->prepare("SELECT * FROM usuario where email = :email");
    $select->bindvalue(":email", $email);
    $select->execute();
    $elemento = $select->fetchAll();
    
    echo '<style>
    body{
    background-image: url(banner.png);
        background-position: top center; 
        background-repeat: no-repeat;
        text-align: center;
        background-color: #99ccff;

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
    echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
    foreach ($elemento as $linha){
        echo "<tr>";
        echo "<td>".$linha ["id_usuario"] . "</td>";
        echo "<td>".$linha ["nome"] . "</td>";
        echo "<td>".$linha ["email"] . "</td>";
        echo "<td>".$linha ["cargo"] . "</td>";
        echo "</tr>";
        
    }
    echo "</table>";
}

if(isset($_POST["botao"])){
    $nome = $_POST["comboNome"];
    $email = $_POST["comboEmail"];
    
    if(($nome != '0') && isset($_POST["comboNome"])){
        echo '<script>
              alert("Campo Nome Selecionado!");
              </script>';
        ConsultarNome($nome);
        
    }elseif(($email != '0') && isset($_POST["comboEmail"])){
        ConsultarEmail($email);
        echo '<script>
              alert("Campo Email Selecionado!");
              </script>';
    }
    
    if(($email == '0')&&($nome == '0')){
        echo '<script>
              alert("Selecione o tipo da Consulta!");
              window.location.href="ConsultarFuncionario.php";
              </script>';
    }
}

