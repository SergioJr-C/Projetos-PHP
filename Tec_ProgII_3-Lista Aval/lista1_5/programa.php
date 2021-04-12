<?php
$nome = $_POST["nome"];
$x = $_POST["x"];
$y = $_POST["y"];

echo "<h1>Números x e y: ";

echo "<table border>
     <tr>
      <td><b> Valor de x </td> <td> = </td> <td> $x</td>
        </tr>
        </table>";

echo "<table border>
     <tr>
      <td><b> Valor de y </td> <td> = </td> <td> $y</td>
        </tr>
        </table>";

imprimir_nome($nome);
somar_valores($x, $y);
mostrar_impar($x, $y);

function imprimir_nome($nome) {
    echo "Nome: ";
    echo "<table border>
 <tr> 
    <td> <b>Nome:</td> <td> $nome </td>
        </tr>
    </table>";
}


function somar_valores($x,$y) {
    $soma = $x + $y;
    echo "<table border>
            <tr> 
            <td><h1>Soma dos valores x e y </h1> <td><h1> = </td> <td><h1> $soma</td>
            </tr>
            </table>";
}

function mostrar_impar($x, $y) {
    echo "<h1>Números ímpares: ";
    for ($i = $x; $i <= $y; $i++) {
            if($i %2 == 1){
                echo "<table border>
                        <tr> 
                       <td>Números ímpares:</td> <td> $i </td>
                       </tr>
                       </table>";
        }
    }
}

