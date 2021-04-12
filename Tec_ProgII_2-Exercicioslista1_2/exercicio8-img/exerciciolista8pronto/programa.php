<?php


$src = $_POST['src'];
$alt = $_POST['alt'];
$altura = $_POST['altura'];
$largura = $_POST['largura'];

mostrar_imagem($src, $alt, $altura, $largura);

function mostrar_imagem($src, $alt, $altura, $largura) {
    echo '
    <img src= " '.$src.'" alt="'.$alt.'" widht="'.$largura.'"height"'.$altura.'">';
}
