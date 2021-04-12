<?php

    //distancia em km
    $km = $_POST["km"];
    //consumo do carro em km/l
    $kml = $_POST["kml"];
    //preço da gasolina
    $precog = $_POST["precogasolina"];
    
    //gasto
    $gasto = $kml*$precog;
    
    //Litros por km
    $mediakml = $km/$kml;
    
    echo "<H1><br>Maria irá gastar: R$ $gasto <br><H1>";
    echo "<H1>Litros por km: $mediakml por litro<H1>";

//entrada:distância da casa de maria até a casa de sua irmã em KM
//entrada:o consumo do carro em km/litro
//entrada:o preço da gasolina no posto em R$

//saída:o valor que maria gastará com combustível na viagem e qts litros de combustível
//o carro consumirá

    
    