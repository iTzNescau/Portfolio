<?php
  try {
    $servidor="localhost";
    $usuario="root";
    $senha="z)O0bqenFQ<EVcf4";
    $dbname="mensagens";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
    if(!$conexao) {
        die("Houve um erro:".mysqli_connect_error());
    }
} catch (\Throwable $th) {
    
}
    ?>