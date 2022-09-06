<?php

    $hostname = "localhost";
    $bancodedados = "cadastro";
    $usuario = "root";
    $senha = "root";

    $msqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($msqli->connect_errno) {
        echo "Falha ao conectar: (" . $msqli->connect_errno . ")" . $msqli->connect_error; 
    }