<?php


    $conexao = new PDO('mysql:host=localhost;dbname=agendap','root','');
    
    $inserir = $conexao ->prepare('INSERT INTO funcionario (nome, email, cargo)
                                          VALUES (:nome, :email, :cargo)');
    
    $inserir->bindValue(':nome', 'Lilica');
    $inserir->bindValue(':email', 'lilica@gmail.com');
    $inserir->bindValue(':cargo', 'cadela de estimação');
    
    $inserir->execute();
    
    $select = $conexao->prepare("SELECT * FROM funcionario");
    $select->execute();
    $funcionario = $select->fetchAll();
                
                
                foreach ($funcionario as $linha){
                  echo $linha ["nome"] . "<br>";
                  echo $linha ["email"] . "<br>";
                  echo $linha ["cargo"] . "<br>";
                  
                  
                }
                    
                
    
    ?>
    