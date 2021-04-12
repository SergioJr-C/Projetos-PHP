<?php
if(isset($_POST["Prosseguir"]) && isset($_POST["radio"])){
    $radio = $_POST["radio"];
    if($radio == "radio1"){
        include 'indexConsultarUsuario.php';
    }
}