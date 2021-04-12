<?php
/*vetor 1 capital
 * vetor 2 população
 * formulário contendo radio buttons para cada alternativa
 * um função para cada alternativa
 */
if(isset($_POST["Mostrar"])){
	$radio = $_POST["radio"];
	$populacao = array(1420766, 1533712 , 6102956 , 2892701 , 10970654 , 421240);
	$capital = array("Porto Alegre", "Recife", "Rio de Janeiro", "Salvador", "São Paulo", "Florianópolis");
	if($radio == "radio1"){
        echo "A média da População: ";        
        calcularMediaPopulacional($populacao);
	}else{
		echo "<br>A Capital mais Populosa: ";    
		CapitalMaisPopulosa($populacao, $capital);
        }
    }
function calcularMediaPopulacional($populacao) {
       $media = (array_sum($populacao))/count($populacao);
       echo "<br>A média Populacional é $media";
}


function CapitalMaisPopulosa($populacao, $capital) {
    $maior = max($populacao);
	$posicaoDoMaior = array_search($maior, $populacao);
	$cidade = $capital[$posicaoDoMaior];
    echo "<br>Nome da Capital: $cidade, com População de $maior habitantes";
}
