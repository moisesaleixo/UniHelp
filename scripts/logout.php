<?php
    
    # Inicializa a sessão, destroi a sessão e encaminha pra tela de login
    session_start();
    session_destroy();
    header('Location: ../index.php');

?>