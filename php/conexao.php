<?php
  try {
    $servidor="127.0.0.1";
    $usuario="root";
    $senha="";
    $dbname="mensagens";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
    if(!$conexao) {
        die("Houve um erro:".mysqli_connect_error());
    }
} catch (\Throwable $th) {
    
}
    ?>