<?php

$show = $_POST;

mostrar_imagem($show);


function mostrar_imagem($show) {
    if ($show == 1) {
        echo '<img src="C:\Users\2017310432\Desktop\imagem\DecisiveJealousDassie-small.gif" style= "alt:300;height:800px;width:300px">';
    }elseif($show == 2){
        echo '<img src="https://www.google.com.br/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiP6IDdxpLkAhXJH7kGHcx5C-4QjRx6BAgBEAQ&url=%2Furl%3Fsa%3Di%26source%3Dimages%26cd%3D%26ved%3D%26url%3Dhttps%253A%252F%252Fwww.comboinfinito.com.br%252Fprincipal%252Fnovas-imagens-de-dark-souls-3-mostram-inimigos-gigantes-cenarios-e-personagens%252F%26psig%3DAOvVaw3SoMQ03hkuid7hjPGKKezr%26ust%3D1566428418180070&psig=AOvVaw3SoMQ03hkuid7hjPGKKezr&ust=1566428418180070 style= "alt:300;height:800px;width:300px">';
        
    }
}

?>