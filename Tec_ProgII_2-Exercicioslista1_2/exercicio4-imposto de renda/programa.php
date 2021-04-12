<?php

if(isset($_POST["nome"])){
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $renda = $_POST["renda"];

    calcular_ir($nome, $cpf, $renda);
}
function calcular_ir($nome, $cpf, $renda){
    echo "<h2>Olá $nome! Seu imposto de renda foi calculado.</h2>";
    $aliquota = 0;
    $parcela = 0;    
    $id = "p1";
    if($renda > 1637.11 && $renda <= 2453.50){
        $aliquota = 0.075;
        $parcela = 122.78;
        $id = "p2";
    }else{
        if($renda > 2453.50 && $renda <= 3271.38){
            $aliquota = 0.15;
            $parcela = 306.80;
            $id = "p3";
        }else{
            if($renda > 3271.38 && $renda <= 4087.65){
                $aliquota = 0.225;
                $parcela = 552.15;
                $id = "p4";
            }else{
                if($renda > 4087.65){
                    $aliquota = 0.275;
                    $parcela = 756.53;
                    $id = "p5";
                }
            }
        }
    }    
    $ir = $renda * $aliquota - $parcela;
    
    tabela($id);
    
    echo "<h1>Valor do IR = $ir</h1>";
}


function css($id = "0"){
    echo '<style>
table {
	border-collapse: collapse;
}

table, td, th {
	border: 1px solid black;
	padding: 10px;
	text-align: center;
}';
    
    echo '#'.$id.'{
    background-color: yellow;
}';
    
echo '</style>';
}

function tabela($id = "0"){
    css($id);
    echo '<table>
		<tr>
			<th>Base de cálculo mensal de R$</th>
			<th>Alíquota %</th>
			<th>Parcela a deduzir do imposto R$</th>
		</tr>
		<tr id="p1">
			<td>Até 1.637,11</td>
			<td> - </td>
			<td> - </td>
		</tr>
		<tr id="p2">
			<td>De 1.637,12 até 2.453,50</td>
			<td>7,5</td>
			<td>122,78</td>
		</tr>
		<tr id="p3">
			<td>De 2.453,51 até 3.271,38</td>
			<td>15</td>
			<td>306,80</td>
		</tr>
		<tr id="p4">
			<td>De 3.271,39 até 4.087,65</td>
			<td>22,5</td>
			<td>552,15</td>
		</tr>
		<tr id="p5">
			<td>Acima de 4.087,65</td>
			<td>27,5</td>
			<td>756,53</td>
		</tr>
	</table>';
}
?>