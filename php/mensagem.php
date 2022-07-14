<?php
    include("conexao.php");

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $sobrenome=$_POST['sobrenome'];
    $textarea=$_POST['textarea'];

    $sql="INSERT INTO mensagens (nome, email, sobrenome, textarea)  
            VALUES ('$nome', '$email', '$sobrenome', '$textarea')";

            if(mysqli_query($conexao, $sql)) {
                echo "mensagem enviada";
            }
            else{
                echo "Erro".mysqli_connect_error($conexao);
            }
            mysqli_close($conexao);
?>