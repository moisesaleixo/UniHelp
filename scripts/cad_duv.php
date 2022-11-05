<?php
    require_once('valida_acesso.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/quest.css">
    <link rel="stylesheet" href="../css/cards.css">
    <link rel="shortcut icon" href="../pictures/ponto-de-interrogacao" type="image/x-icon">
</head>
<body>

        <header>
            <div class="logo">
                <a href="question.php"><img src="../pictures/logo2.png" alt=""></a>
            </div>
            <div class="hamburger_menu">
                <nav class="sidebar_menu">
                    <ul>
                        <li class="link"><a class="dados" href="perfil.php">Perfil</a></li>
                        <li class="link"><a class="dados" href="cad_duv.php">Dúvidas</a></li>
                        <li class="link"><a class="dados" href="question.php">Voltar</a></li>
                        <li class="link"><a class="dados" href="logout.php">Sair</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="card_container">
            <form action="" method="get" class="card_form">
                <label for="">Título</label>
                <input type="text" name="titulo" placeholder="Título de sua dúvida">
                <label for="">Dúvida</label>
                <textarea name="duvida" id="" cols="30" rows="3" placeholder="Sua dúvida aqui"></textarea>
            </form>
        </section>

        <section class="card_feitas">
            <div class="card_titulo">
                <h3>Título</h3>
            </div>
            <div class="card_duvida">
                <p>Dúvida</p>
            </div>
        </section>


</body>
</html>