<?php

function conectar($banco) {
    return new PDO("mysql:host=localhost;dbname=$banco","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}


function inserir($data, $tipo, $duracao) {
    $con = conectar("bdexercicios");
    $inserir = $con->prepare("insert into exercicio(data, tipo, duracao)
        values(:data,:tipo,:duracao)");
    
    $inserir->bindValue(":data", $data);
    $inserir->bindValue(":tipo", $tipo);
    $inserir->bindValue(":duracao", $duracao);
    $inserir->execute();
}


function listarCadastro($data, $tipo, $duracao) {
    $con = conectar("bdexercicios");
    $select = $con->prepare("SELECT * from exercicio ORDER BY id DESC LIMIT 1");
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
    <td><b>data</td>
    <td><b>tipo</td>
    <td><b>duracao</td>
    </tr>
    ";
    
    echo "<tr>";
    echo "<td> "."<p style='color: #FF0000;'>".$dados["id"] ."</td>";
    echo "<td> "."<p style='color: #3333ff;'>". $dados["data"] ."</td>";
    echo "<td> "."<p style='color: #3333ff;'>". $dados["tipo"] ."</td>";
    echo "<td> "."<p style='color: #3333ff;'>". $dados["duracao"] ."</td>";
    echo "</tr>";
    
}



if(isset($_POST["botao"])){
    if(!empty($_POST["data"]) && !empty($_POST["tipo"]) && !empty($_POST["duracao"])){
        
        $data = $_POST["data"];
        $tipo = $_POST["tipo"];
        $duracao = $_POST["duracao"];
        inserir($data, $tipo, $duracao);
        listarCadastro($data, $tipo, $duracao);
    }else{
        echo '<script>
              alert("Preencha todos os Campos!");
              window.location.href="index.php";
              </script>';
    }
    
    echo"<br><br><form action='index.php'>
     <input name='Voltar' type='submit' value='Voltar' />
        </form>
        <br>
        <br>";
}