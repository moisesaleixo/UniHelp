<?php
    include('../conexao/conexao.php');
        
    $nome = ucwords($_POST['nome']);
    $sobrenome = ucwords($_POST['sobrenome']);
    $curso = ucwords($_POST['curso']);
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $in = mysqli_query($conexao, "INSERT INTO usuarios (nome, sobrenome, curso, email, senha) 
    VALUES ('$nome', '$sobrenome', '$curso', '$email', '$senha')") or die("Erro! - Sem conexão com o abcno");
    echo "Cadastro realizado com sucesso!";


?>