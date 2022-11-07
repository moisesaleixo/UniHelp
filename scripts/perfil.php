<?php
require_once 'valida_acesso.php';
include '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/quest.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="shortcut icon" href="../pictures/ponto-de-interrogacao" type="image/x-icon">
</head>

<body>

    <?php

    $db = mysqli_select_db($conexao, "unihelp");

    //criando a query de consulta à tabela criada 
    $sql = mysqli_query($conexao, "SELECT * FROM usuarios") or die(mysqli_error($conexao) //caso haja um erro na consulta 
    );

    //pecorrendo os registros da consulta. 
    while ($aux = mysqli_fetch_assoc($sql)) {
        echo "-----------------------------------------<br />";
        echo "Nome: " . $aux["nome"] . "<br />";
        echo "Sobrenome: " . $aux["sobrenome"] . "<br />";
        echo "Curso: " . $aux["curso"] . "<br />";
        echo "Email: " . $aux["email"] . "<br />";
        echo "Senha: " . $aux["senha"] . "<br />";
    }
    ?>

</body>

</html>