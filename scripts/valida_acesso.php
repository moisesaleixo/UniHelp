<?php

    session_start();

    if (!isset($_SESSION['nome_user'])) {
        header('Location: ../index.php?login=erro');
    }
?>