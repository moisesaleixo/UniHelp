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
        <section id="esquerda"><!--fundo da esquerda-->
            <img src="../imagens_modelo/earth-5272550_1280.png" alt="">
        </section><!--fundo da esquerda-->

        <section id="direita"><!--Cadastro-->
            <div><!--fundo direita-->
                <div><!--Dados-->
                    <div>
                        <div class="logo logo_cadastro"><!--Logo-->
                            <h1>UniHelp</h1>
                        </div><!--Logo-->
                        <nav class="links_pages"><!--Links-->
                            <a href="../index.php">Entrar</a>
                            <h3>ou</h3>
                            <a href="cadastro.php">Cadastrar</a>
                        </n><!--Links-->
                    </div>
                </div><!--Dados-->
            </div><!--fundo direita-->
            <div id="fundo_direita"><!--formulário-->
                <form class="form_cadastro" action="valida_cadastro.php" method="post" width: 50vw;>
                    <input class="superior detalhe" type="text" name="nome" id="" placeholder="Nome">
                    <input class="detalhe" type="text" name="sobrenome" id="" placeholder="Sobrenome">
                    <input type="Date" name="data_nasc" class="detalhe" placeholder="00-00-0000">
                    <input class="detalhe" type="text" name="curso" id="" placeholder="Curso">
                    <input class="detalhe" type="text" name="email" id="" placeholder="Email">
                    <input class="detalhe" type="password" name="senha" id="" placeholder="Senha">
                    <div><!--Botão Envias-->
                        <input type="submit" value="Cadastrar" type="submit" class="buttom">
                        <a href="../index.php" class="buttom_voltar">Voltar</a>
                    </div><!--Botão Envias-->
                </form>
                    <?php
                        if (isset($_GET['falta']) && $_GET['falta'] == 'dados'){
                    ?>
                        <div>
                            <p class="error">Dados incompletos</p>
                        </div>
                    <?php
                        }
                    ?>
            </div><!--formulário-->
        </section><!--Cadastro-->
    </main>

</body>
</html>