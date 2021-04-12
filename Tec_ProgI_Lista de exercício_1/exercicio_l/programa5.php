<?php

        $mes    = $_POST['valor1'];
   
        switch($mes){
            case 1:
                echo "Mês de janeiro";
                break;
            case 2:
                echo "Mês de fevereiro";
                break;
            case 3:
                echo "Mês de Março";
                break;
            case 4:
                echo "Mês de Abril";
                break;
            case 5:
                echo "Mês de Maio";
                break;
            case 6:
                echo "Mês de Junho";
                break;
            case 7:
                echo "Mês de Julho";
                break;
            case 8:
                echo "Mês de Agosto";
                break;
            case 9:
                echo "Mês de Setembro";
                break;
            case 10:
                echo "Mês de Outubro";
                break;
            case 11:
                echo "Mês de Novembro";
                break;
            case 12:
                echo "Mês de Dezembro";
                break;
            
            default:
                echo "Não existe mês com tal Número";
        }