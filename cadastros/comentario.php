<?php

    # Inclusao de página e inicializando uma sessão
    session_start();
    include "../conexao/conexao.php";

    # Pegando os dados e atribuindo a sessões e pegando dados de sessões para atribui-los a variaveis
    $resposta = $_POST['resposta'];
    $email = $_SESSION['email_user'];
    $id_duvida = $_SESSION['id'];

    # Analisando se existe a resposta a ser cadastrada
    if (empty($resposta)) {
        header('Location: ../scripts/responder.php?campo=vazio');
    }else{
        $in = mysqli_query($conexao, "INSERT INTO respostas (resposta, email, id_duvida) VALUES ('$resposta', '$email', '$id_duvida')");
        header('Location: ../scripts/responder.php?id='. $id_duvida .'');
    }

?>