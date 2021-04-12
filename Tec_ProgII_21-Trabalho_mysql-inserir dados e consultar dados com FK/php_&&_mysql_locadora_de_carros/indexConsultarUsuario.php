<!DOCTYPE html>
<html>
<head>
<style>
body{
background-image: url(banner.png);
        background-position: top center; 
        background-repeat: no-repeat;
        text-align: center;
        background-color: #99ccff;
}

     #wrapper {
    position:absolute;
    width:100%;
    height:100%;
} 
   
  #container { 
    background-color: #6699ff; 
    position: top center; 
    margin:0 auto;
    width: 776px; 
    height: 400px;  
    top: 25%; 
    text-align: center; 
    overflow: auto; 
}
<meta charset="<utf-8">
<title>PHP E Banco de Dados</title>
</style>
</head>
<body>
<img align="left" src="logo.jpg" alt="some text" width=50 height=40>
<br><br><br><br><br><br><br><br><br><br><br>
<div id="wrapper">
    <div id="container">
<h1>Consulta de Usuarios</h1>
<?php 
include_once 'programaConsultarUsuario.php';
formulario();
?>
</div>
    </div>
</body>
</html>