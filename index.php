<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="pictures/icon.png" type="image/x-icon">
    <title>UniHelp</title>
    <style type="text/css">
        .error{
            background-color: lightpink;
            color: black;
            text-align: center;
            justify-content: center;
            border-radius: 30px;
            padding: 5px;
            width: 350px;
            margin: 0 auto;
        }

    </style>
</head>
<body>

    <main>
        <!-- Imagem da área que fica na página de login -->
        <section id="esquerda">
            <img src="pictures/planeta.png" alt="">
        </section>
        <!-- Fim da área imagem que fica na página de login -->
        
        <!-- Área com do campos de login e mover-se entre páginas login e cadastro -->
        <section id="direita">

            <!-- Área com a logo e links das páginas login e cadastro -->
            <div>
                <div class="dados_ordem">
                    <div>
                        <div class="logo">
                            <h1>UniHelp</h1>
                        </div>
                        <nav class="links_pages">
                            <a href="index.php">Entrar</a>
                            <h3>ou</h3>
                            <a href="scripts/cadastro.php">Cadastrar</a>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Fim da área com a logo e links das páginas login e cadastro -->

            <!-- Área que fica os campos de fazer login -->
            <div id="fundo_direita">
                <form action="scripts/valida_login.php" method="post" width: 50vw;>
                    <input class="superior detalhe" type="email" name="email" id="" placeholder="E-mail">
                    <input class="detalhe" type="password" name="senha" id="" placeholder="Senha">
                    <!-- Exibe um erro caso se algo não for preenchido direito no login -->
                    <?php if (isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
                            <div><p class="error">Usuário ou senha incorreto(s)!</p></div>
                        <?php } ?>            
                    <div>
                        <button type="submit" class="buttom">Entrar</button>
                    </div>
                    </form>
            </div>
            <!-- Fim da área que fica os campos de fazer login -->
        </section>
        <!-- Fim da área com do campos de login e mover-se entre páginas login e cadastro -->
    </main>
    
</body>
</html>