<?php
    include('../conexao/conexao.php');
        
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $curso = $_POST['curso'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, sobrenome, curso, email, senha) VALUES ('{$nome}', '{$sobrenome}', '{$curso}', '{$email}', '{$senha}')";

    $resultado = $con->query($sql);

    $con->close();

    header("Location: question.php");

?>