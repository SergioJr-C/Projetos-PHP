<!DOCTYPE html>
<html>
<head>
<!-- Aqui vai o style -->
<style type="text/css">
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
    width: 800px; 
    height: 470px; 
    top: 25%; 
    text-align: center; 
    overflow: auto; 
}

#alugando_carro{
        background-image: url(alugando_carro.gif);
        position: top center; 
    margin:0 auto;
    width: 480px; 
    height: 360px; 
    top: 25%; 
    text-align: center; 
    overflow: auto;
}     
<meta charset="ISO-8859-1">
</style>
<!-- Aqui vai o style -->
</head>
<body>
<img align="left" src="logo.jpg" alt="some text" width=50 height=40>
<!-- Aqui vai o include -->
<br><br><br><br><br><br><br><br><br><br>
<h1 align="center"> Trabalho de Banco de Dados e PhP</h1>
<h1 align="center"> Locadora de Carros</h1>
<br>
<div id="wrapper">
    <div id="container">
        <form name="entrada" method="post" action="programaIntermediario.php">

<input  type="radio" name="radio" value = "radio1"> Tratamento dos dados do Usuario Final
<br>
<input  type="radio" name="radio" value = "radio2"> Inserir dados dos Veículos
<br>
<input  type="radio" name="radio" value = "radio3"> Alugar Veículo
<br><br>
<input name="Prosseguir" type="submit" value="Prosseguir"/>
</form>
<div id="alugando_carro">
</div>
</div>
    </div>
</html>