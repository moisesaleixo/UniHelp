<?php

    $hostname = "localhost";
    $bancodedados = "cadastro";
    $usuario = "root";
    $senha = "root";

    $conecao = new mysqli($hostname, $usuario, $senha, $bancodedados);

    if ($conecao -> connect_errno) {
        echo "Erro";
    }else{
        echo "Conexão bem sucessida";
    }

?>