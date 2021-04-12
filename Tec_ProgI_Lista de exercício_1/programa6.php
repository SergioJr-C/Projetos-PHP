<?php

$valor = $_POST['valor'];


if ($valor%3 == 0){
    echo "O número $valor é divisível 3";
}else if ($valor%7 == 0){
    echo "O número $valor é divisível por 7";
}