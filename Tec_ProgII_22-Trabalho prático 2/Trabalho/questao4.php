<?php

function conectar($banco)
{
    return new PDO("mysql:host=localhost;dbname=$banco", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

function formulario(){
    echo "<form action='questao4.php' method='post'>";
    echo "<select name='comboNome' id='cn' onClick='limparturma(); return false;'> <option value='0'> Consultar por nome</option>";
    $con = conectar("bdalunos");
    $select = $con->prepare("SELECT  nome FROM alunos");
    $select->execute();
    $cadastro = $select->fetchAll();
    
    foreach ($cadastro as $elemento){
        echo '<option value="'.$elemento["nome"].'">'.$elemento["nome"].'</option>';
    }
    
    echo '</select>';
    
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo '<script>
    function limparturma(){
        document.getElementById("cc").getElementsByTagName("option")[0].selected = "selected";
    }
    function limparNome(){
        document.getElementById("cn").getElementsByTagName("option")[0].selected = "selected";
    }
    </script>';
    echo '</select>';
    
    echo'<br>';
    echo"<br>";
    echo"<input type='submit' name='botao' value='Consultar'>
       </form>";

}
        

function ConsultarNome($nome) {
    $con = conectar("bdalunos");
    $select = $con->prepare("SELECT * FROM alunos where nome = :nome");
    $select->bindvalue(":nome", $nome);
    $select->execute();
    $elemento = $select->fetch();
    
    echo '<style>
        body{
            text-align: center;
        }   
        table {
        
        }
        
        table, td, th {
	       text-align: center;
        }
        </style>';        
    
    if(empty($elemento)){
        echo "Nome não cadastrado.";
    }else{
    
        echo "<table border=1px align='center'>
            
        <tr>
        <td><b>Id</td>
        <td><b>Nome</td>
        <td><b>Email</td>
        <td><b>turma</td>
        </tr>
        ";
        
        echo "<tr>";
        echo "<td> "."<p style='color: #FF0000;'>". $elemento["id"] ."</td>";
        echo "<td> "."<p style='color: #3333ff;'>".$elemento["nome"] ."</td>";
        echo "<td> "."<p style='color: #3333ff;'>". $elemento["email"] ."</td>";
        echo "<td> "."<p style='color: #3333ff;'>". $elemento["turma"] ."</td>";
        echo "</tr>";
    
    }

    echo"<br><br><form action='questao3indexConsultar.php'>
         <input name='Voltar' type='submit' value='Voltar' />
            </form>
            <br>
            <br>";
}


if(isset($_POST["botao"])){
    $nome = $_POST["comboNome"];
    
    if(($nome != '0') && isset($_POST["comboNome"])){
        echo '<script>
              alert("Campo Nome Selecionado!");
              </script>';
        ConsultarNome($nome);
    }

    
    if($nome == '0'){
        echo '<script>
              alert("Selecione o tipo da Consulta!");
              window.location.href="questao3indexConsultar.php";
              </script>';
    }
}


if(isset($_POST["botao2"]) && (isset($_POST["campopesquisa"]))){    
    if(!empty($_POST["campopesquisa"])){
        $nomePesquisa = $_POST["campopesquisa"];
        ConsultarNome($nomePesquisa);
    }else{
        echo '<script>
              alert("Insira o nome para pesquisar!");
              window.location.href="questao3indexConsultar.php";
              </script>';
    }

}


