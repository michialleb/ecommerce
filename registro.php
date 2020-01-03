<?php

    header("Content-type: text/html; charset=utf-8");

    include_once 'conexao.php';
    
    $nome = $_POST['nome'];
    $email =$_POST['email'];
    $senha= $_POST['senha'];
    $telefone= $_POST['telefone'];
    $cidade= $_POST['cidade'];
    $estado= $_POST['estado'];
    $datacriaconta= $_POST['datacriaconta'];
    
    $sql1 = $dbcon->query("SELECT * FROM membros WHERE email='$email'");
    if(mysqli_num_rows($sql1) >0 ){
        echo "email_error";
    } else { 
            //echo "continua";
            $sql2 = $dbcon->query("INSERT INTO membros (nome,email,senha,telefone,cidade,estado,datacriaconta) VALUES('$nome','$email','$senha','$telefone','$cidade','$estado','$datacriaconta')");
            if ($sql2) {
                    echo "registro_ok";
            } else {
                   echo "registro_error";
        } 
    }
?>