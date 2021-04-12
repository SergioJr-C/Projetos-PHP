<?php


function verificar_ano($ano) {
    if(($ano %4 == 0 || $ano %400 == 0) && ($ano %100 !=0)){
        echo "O ano $ano é Bissexto!"; 
        $id = "p1";
    }else {
        echo "O ano $ano não é Bissexto!";
        $id = "p2";
    }
}


function tabela($id = "0"){
    css($id);
    echo '<table>
		<tr>
            <tr id="p2">
			<td>Janeiro</td>
            <tr id="p1">
			<td>Fevereiro</td>
            <tr id="p2">
			<td>Março</td>
            <tr id="p2">
			<td>Maio</td>
            <tr id="p2">
			<td>Abril</td>
            <tr id="p2">
			<td>Junho</td>
            <tr id="p2">
			<td>Julho</td>
            <tr id="p2">
			<td>Agosto</td>
            <tr id="p2">
			<td>Setembro</td>
            <tr id="p2">
			<td>Outubro</td>
            <tr id="p2">
			<td>Novembro</td>
            <tr id="p2">
			<td>Dezembro</td>

		</tr>
	</table>';
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

?>