<?php


$matricula = $_POST["matricula"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$idade = $_POST["idade"];
$curso = $_POST["curso"];

verificar_idade($idade);

function verificar_idade($idade){
    if($idade > 17){
    css("blue", "green");
    echo '<h1 id="msg">Matrícula realizada com Sucesso!</h1>';
}else{
    css("red", "pink");
    echo '<h1 id="msg">Aluno menor de idade! Necessita da autorização dos pais!</h1>';
}

}


function css($corTexto,$corfundo){
    echo '<style>
        #msg{
        color:'.$corTexto.';
        background-color: '.$corfundo.';
}
</style>';
}

