<?php
    $conexao = mysqli_connect('localhost', 'root', 'root');
    $banco = mysqli_select_db($conexao, 'unihelp') or die("Erro ao selecionar o banco de dados");
?>