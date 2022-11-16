<?php
    
    $host = 'localhost';
    $user = 'u225668871_user';
    $senha = '6523338yMoises.';
    $db_name = 'u225668871_unihelp_bd';
    
    # Conectando ao host local, pedindo o usuário e a senha
    $conexao = mysqli_connect($host, $user, $senha);

    # Selecionando o banco de dados e retornando erro se algo não funcionar
    $banco = mysqli_select_db($conexao, $db_name) or die("Erro ao selecionar o banco de dados");
?>