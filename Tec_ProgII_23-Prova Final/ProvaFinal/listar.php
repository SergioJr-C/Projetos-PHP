<?php

include 'inserir.php';

function listarTodos() {
    $con = conectar("bdexercicios");
    $select = $con->prepare("SELECT * FROM exercicio");
    $select->execute();
    $exercicio = $select->fetchAll();
    
    echo "<table border=1px align='center'>
    <tr>
    <td><b>Id</td>
    <td><b>data</td>
    <td><b>tipo</td>
    <td><b>duracao</td>
    </tr>";
    
    foreach ($exercicio as $linha){
        echo "<tr>";
        echo "<td>".$linha ["id"] . "</td>";
        echo "<td>".$linha ["data"] . "</td>";
        echo "<td>".$linha ["tipo"] . "</td>";
        echo "<td>".$linha ["duracao"] . "</td>";
        echo "</tr>";
        
    }
    echo "</table>";

    echo"<br><br><form action='index.php'>
     <input name='Voltar' type='submit' value='Voltar' />
        </form>
        <br>
        <br>";
}


if(isset($_POST["Consultar"])){
    listarTodos();
    
    }
    

