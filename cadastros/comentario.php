<?php
    session_start();
    include "../conexao/conexao.php";

    $resposta = $_POST['resposta'];
    $email = $_SESSION['email_user'];
    $id_duvida = $_SESSION['id'];

    if (empty($resposta)) {
        header('Location: ../scripts/responder.php?campo=vazio');
    }else{
        $in = mysqli_query($conexao, "INSERT INTO respostas (resposta, email, id_duvida) VALUES ('$resposta', '$email', '$id_duvida')");
        header('Location: ../scripts/responder.php?id='. $id_duvida .'');
    }

?>