<?php
function conectar($banco) {
    return new PDO("mysql:host=localhost;dbname=$banco","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}


//consulta
//inserção


function inserirdadosUsuario($cpf, $nome, $email, $cargo){
    $con = conectar("locadora");
    $inserir = $con->prepare("insert into
        usuario (cpf, nome, email, cargo) values
        (:cpf, :nome, :email, :cargo)");
    $inserir->bindValue(":cpf", $cpf);
    $inserir->bindValue(":nome", $nome);
    $inserir->bindValue(":email", $email);
    $inserir->bindValue(":cargo", $cargo);
    $inserir->execute();
}

function inserirdadosVeiculos($modelo, $modelo, $placa, $marca, $cor, $ano, $descricao){
    $con = conectar("locadora");
    $inserir = $con->prepare("insert into
        veiculos (modelo, placa, marca, cor, ano, descricao) values
        (:modelo, :placa, :marca, :cor, :ano, :descricao)");
    $inserir->bindValue(":modelo", $modelo);
    $inserir->bindValue(":placa", $placa);
    $inserir->bindValue(":marca", $marca);
    $inserir->bindValue(":cor", $cor);
    $inserir->bindValue(":ano", $ano);
    $inserir->bindValue(":descricao", $descricao); 
    $inserir->execute();
}


