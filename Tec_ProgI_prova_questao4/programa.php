<?php

$deslocamento = $_POST["deslocamento"];
$tempo = $_POST["tempo"];

$velocidademedia = $deslocamento/$tempo;

echo "A velocidade percorrita foi de: $velocidademedia KM/H";

/*ler os dados distância percorrida e tempo destes e calcular a velocidade média do carro
 * 
 * 
 * */