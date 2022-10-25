<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="../css/quest.css">
    <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>

    <main>

        <header> <!--Cabeçalho-->
            <div class="logo"><!--logo-->
                <a href="question.php"><img src="../pictures/logo2.png" alt=""></a>
            </div><!--fim logo-->
            
            <div id="barra">
                <input type="text" placeholder="Buscar..." class="barra_busca">
            </div>

            <div class="hamburger_menu">
                <nav class="sidebar_menu">
                    <ul>
                        <li class="link"><a class="dados" href="perfil.php">Perfil</a></li>
                        <li class="link"><a class="dados" href="config.php">Configurações</a></li>
                        <li class="link"><a class="dados" href="logout.php">Sair</a></li>
                    </ul>
                </nav>
            </div>
        </header><!--fim Cabeçalho-->

    </main>

</body>
</html>