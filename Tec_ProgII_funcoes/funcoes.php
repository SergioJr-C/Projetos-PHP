<?php


function imprimir($nome, $idade, $media) {
    echo "$nome tem $idade anos de idade. <br>";
    echo "O Aluno $nome ficou com a média: $media";
}

function calcular_idade($an){
    $idade = 2019 - $an;
    return $idade;
}

function calcular_media($nota1,$nota2) {
    $media = ($nota1 + $nota2)/2;
    return $media;
}
?>