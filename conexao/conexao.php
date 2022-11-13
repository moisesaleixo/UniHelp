<?php

    # Conectando ao host local, pedindo o usuário e a senha
    $conexao = mysqli_connect('localhost', 'root', 'root');

    # Selecionando o banco de dados e retornando erro se algo não funcionar
    $banco = mysqli_select_db($conexao, 'unihelp') or die("Erro ao selecionar o banco de dados");
?>