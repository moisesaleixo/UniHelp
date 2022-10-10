<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário</title>
    <link rel="stylesheet" href="css/quest.css">
</head>
<body>

    <main>

        <header>
            <div class="logo">
                <a href="question.php"><img src="pictures/logo2.png" alt=""></a>
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
        </header>

        <section id="foto">
            <div>
                <input class="foto_user" type="file" accept="image/*">
            </div>
        </section>
        <section id="area_textos">
            <div class="area">
                <div class="texto">
                    <textarea placeholder="Sua pergunta aqui" name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div>
                    
                </div>
            </div>
        </section>

    </main>

</body>
</html>