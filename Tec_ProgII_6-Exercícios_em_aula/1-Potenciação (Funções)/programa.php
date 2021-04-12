<?php


$x = $_POST['x'];
$y = $_POST['y'];

echo "<h1>Potenciação:";

echo "<br> Valor de $x";
echo "<br> Valor de $y";

potenciacao($x, $y);
potenciacao2($x, $y);

function potenciacao($x, $y) {
    $result1 = pow($x, $y);
    echo "<br>Potenciação de $x elevado na $y é igual a $result1 ";
}

function potenciacao2($x, $y) {
    $potenlaco = 0;
    for ($i = 0; $i < $y; $i++) {
        $potenlaco = $x * $x;
    }
    echo "<br> $x elevado na $y é : $potenlaco";
}


/*crie um programa em php que receba 2 valores do usuário
 * crie uma função que a partir de dois valores calcule a potenciação dos mesmos, ou seja,
 * valor 1 elevado à potência do valor 2;
 *
 *  Para isso, crie uma função que calcule a potenciação usando laço de repetição
 *  (não usar a função pow do php...)
 */
?>