<?php

function conectar($banco)
{
    return new PDO("mysql:host=localhost;dbname=$banco", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

function formulario()
{
    echo "<form action='programaConsultarFuncionario.php' method='post'>";
    echo "<select name='comboNome' id='cn' onClick='limparCargo(); return false;'> <option value='0'> Consultar por nome</option>";
    $con = conectar("agendap");
    $select = $con->prepare("SELECT  nome FROM funcionario");
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
    echo "<select name='comboCargo' id='cc' onClick='limparNome(); return false;'> <option value='0'> Consultar por cargo</option>";
    $con = conectar("agendap");
    $select = $con->prepare("SELECT  cargo FROM funcionario");
    $select->execute();
    $cadastro = $select->fetchAll();
    
    foreach ($cadastro as $elemento){
        
        echo '<option value="'.$elemento["cargo"].'">'.$elemento["cargo"].'</option>';
    }
    
    echo '</select>';
    
    echo'<br>';
    echo"<br>";
    echo"<input type='submit' name='botao' value='Consultar'>
       </form>";    
}

function ConsultarNome($nome) {
    $con = conectar("agendap");
    $select = $con->prepare("SELECT * FROM funcionario where nome = :nome");
    $select->bindvalue(":nome", $nome);
    $select->execute();
    $elemento = $select->fetch();
    
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
    echo "<td>id: ". $elemento["id"] ."</td>";
    echo "<td>Nome: ". $elemento["nome"] ."</td>";
    echo "<td>E-mail: ". $elemento["email"] ."</td>";
    echo "<td>Cargo: ". $elemento["cargo"] ."</td>";
    echo "</tr>";
   
    echo"<form>
     <input name='botao' type='submit' value='Voltar' action='programa.php' />
        </form>
        <br>
        <br>";
    
}


function ConsultarCargo($cargo) {
    $con = conectar("agendap");
    $select = $con->prepare("SELECT * FROM funcionario where cargo = :cargo");
    $select->bindvalue(":cargo", $cargo);
    $select->execute();
    $elemento = $select->fetchAll();
    
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
    foreach ($elemento as $linha){
        echo "<tr>";
        echo "<td>".$linha ["id"] . "</td>";
        echo "<td>".$linha ["nome"] . "</td>";
        echo "<td>".$linha ["email"] . "</td>";
        echo "<td>".$linha ["cargo"] . "</td>";
        echo "</tr>";
        
    }
    echo "</table>";   
}

if(isset($_POST["botao"])){
    $nome = $_POST["comboNome"];
    $cargo = $_POST["comboCargo"];
    
    if(($nome != '0') && isset($_POST["comboNome"])){
        echo '<script>
              alert("Campo Nome Selecionado!");
              </script>';
        ConsultarNome($nome);
        
    }elseif(($cargo != '0') && isset($_POST["comboCargo"])){
        ConsultarCargo($cargo);
        echo '<script>
              alert("Campo Cargo Selecionado!");
              </script>';  
    }
    
    if(($cargo == '0')&&($nome == '0')){
        echo '<script>
              alert("Selecione o tipo da Consulta!");
              window.location.href="ConsultarFuncionario.php";
              </script>';
         }          
     }

     