<?php

    # Faz a requisição de uma página para usar depois
    include('../conexao/conexao.php');
        
    # Peda os dados que foram enviados da página cadastro
    $nome = ucwords($_POST['nome']);
    $sobrenome = ucwords($_POST['sobrenome']);
    $data_nasc = $_POST['data_nasc'];
    $curso = ucwords($_POST['curso']);
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    # Analisa se todos os dados foram preenchidos e faz o cadastro 
    if (empty($nome) || empty($sobrenome) || empty($data_nasc) || empty($curso)|| empty($email) ||empty($senha)) {
        header('Location: cadastro.php?falta=dados');
    }else{
        $in = mysqli_query($conexao, "INSERT INTO usuarios (nome, sobrenome, data_nasc, curso, email, senha) 
        VALUES ('$nome', '$sobrenome', '$data_nasc','$curso', '$email', '$senha')") or die("Erro! - Sem conexão com o banco");
        header('Location: ../index.php');
    }

?>