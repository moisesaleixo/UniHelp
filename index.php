<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="pictures/ponto-de-interrogacao.png" type="image/x-icon">
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
            <section id="esquerda"><!--fundo da esquerda-->
                <img src="imagens_modelo/earth-5272550_1280.png" alt="">
            </section><!--fim fundo da esquerda-->
            <section id="direita"><!--Login-->
                <div><!--fundo direita-->
                    <div class="dados_ordem"><!--Dados-->
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
                    </div><!--fim Dados-->
                </div><!--fim fundo direita-->
                <div id="fundo_direita">
                    <form action="scripts/valida_login.php" method="post" width: 50vw;>
                            <input class="superior detalhe" type="email" name="email" id="" placeholder="E-mail">
                            <input class="detalhe" type="password" name="senha" id="" placeholder="Senha">            
                            <div>
                                <button type="submit" class="buttom">Entrar</button>
                            </div>
                    </form>
                            <?php
                                if (isset($_GET['login']) && $_GET['login'] == 'erro'){
                            ?>
                                    <div>
                                        <p class="error">Usuário ou senha incorreto(s)!</p>
                                    </div>
                            <?php
                                }
                            ?>
                </div>
            </section><!--fim Login-->
        </main>
    
</body>
</html>