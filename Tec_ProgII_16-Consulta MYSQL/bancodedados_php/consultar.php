<?php

$conexao = new PDO('mysql:host=localhost;dbname=agendap','root','');



$select = $conexao->prepare("SELECT * FROM funcionario");
$select->execute();
$funcionario = $select->fetchAll();


echo "<table border=1px>
<tr>
<td><b>Id</td>
<td><b>Nome</td>
<td><b>Email</td>
<td><b>Cargo</td>
</tr>";

foreach ($funcionario as $linha){
    echo "<tr>";
    echo "<td>".$linha ["id"] . "</td>";
    echo "<td>".$linha ["nome"] . "</td>";
    echo "<td>".$linha ["email"] . "</td>";
    echo "<td>".$linha ["cargo"] . "</td>";
    echo "</tr>";
    
}
echo "</table>";

//tr linha
//coluna