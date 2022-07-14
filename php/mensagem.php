<?php
    include("conexao.php");

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $sobrenome=$_POST['sobrenome'];
    $textarea=$_POST['textarea'];

    $sql="INSERT INTO mensagens (nome, email, sobrenome, textarea)  
            VALUES ('$nome', '$email', '$sobrenome', '$textarea')";
            
            mysqli_close($conexao);
?>