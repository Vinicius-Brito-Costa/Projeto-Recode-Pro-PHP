<?php
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "";
    $bancoDB  = "fullstack";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDB);
    if(!$conexao)
    {
        die("Erro de conexão:".mysqli_connect_error());
    }
    mysqli_set_charset($conexao, "utf8mb4");
