<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../pictures/ponto-de-interrogacao.png" type="image/x-icon">
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
        <!-- Sessão que coloca a imagem na tela de login -->
        <section id="esquerda">
            <img src="../pictures/planeta.png" alt="">
        </section>
        <!-- Fim da sessão que coloca a imagem na tela de login -->

        <!-- Sessão que coloca os campos para fazer o cadastro -->
        <section id="direita">
            <!-- Área que coloca a logo e os links de direcionamento nas telas de login e cadastro -->
            <div>
                <div>
                    <div>
                        <div class="logo logo_cadastro">
                            <h1>UniHelp</h1>
                        </div>
                        <nav class="links_pages">
                            <a href="../index.php">Entrar</a>
                            <h3>ou</h3>
                            <a href="cadastro.php">Cadastrar</a>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Fim da área que coloca a logo e os links de direcionamento nas telas de login e cadastro -->

            <!-- Área que coloca os campos para se cadastrar -->
            <div id="fundo_direita">
                <form class="form_cadastro" action="valida_cadastro.php" method="post" width: 50vw;>
                    <input class="superior detalhe" type="text" name="nome" id="" placeholder="Nome">
                    <input class="detalhe" type="text" name="sobrenome" id="" placeholder="Sobrenome">
                    <input type="Date" name="data_nasc" class="detalhe" placeholder="00-00-0000">
                    <input class="detalhe" type="text" name="curso" id="" placeholder="Curso">
                    <input class="detalhe" type="text" name="email" id="" placeholder="Email">
                    <input class="detalhe" type="password" name="senha" id="" placeholder="Senha">
                    <div><!--Botão Envias-->
                        <input type="submit" value="Cadastrar" type="submit" class="buttom">
                        <a href="../index.php" class="buttom">Voltar</a>
                    </div><!--Botão Envias-->
                </form>
                    <?php if (isset($_GET['falta']) && $_GET['falta'] == 'dados'){ ?>
                        <div><p class="error">Dados incompletos</p></div>
                    <?php } ?>
            </div>
            <!-- Fim da área que coloca os campos para se cadastrar -->
        </section>
        <!-- Fim da sessão que coloca os campos para fazer o cadastro -->
    </main>
</body>
</html>