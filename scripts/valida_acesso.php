<?php
    # Inicializa o chamado da sessões
    session_start();

    # Analisa se quem está tentando acessar está logado se não vai para a página de login
    if (!isset($_SESSION['nome_user'])) {
        header('Location: ../index.php?login=erro');
    }
?>