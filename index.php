<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="pictures/ponto-de-interrogacao.png" type="image/x-icon">
    <title>UniHelp</title>
</head>
<body>

    <main>
        <section id="esquerda"><!--fundo da esquerda-->
            <img src="imagens_modelo/earth-5272550_1280.png" alt="">
        </section><!--fundo da esquerda-->
        <section id="direita"><!--Logino-->
            <div><!--fundo direita-->
                <div class="dados_ordem"><!--Dados-->
                    <div>
                        <div class="logo">
                            <h1>UniHelp</h1>
                        </div>
                        <nav class="links_pages">
                            <a href="index.php">Entrar</a>
                            <h3>ou</h3>
                            <a href="cadastro.php">Cadastrar</a>
                        </nav>
                    </div>
                </div><!--Dados-->
            </div><!--fundo direita-->
            <div id="fundo_direita">
                <form action="" method="post" width: 50vw;>                    
                        <input class="superior detalhe" type="email" name="email" id="" placeholder="E-mail">
                    
                        <input class="detalhe" type="password" name="senha" id="" placeholder="Senha">
                    
                        <div>
                            <input class="buttom"  type="buttom" value="Entrar">
                            <a href="question.php" class="esqueci_senha">Esqueci minha senha!</a>
                        </div>   
                </form>
            </div>
        </section><!--Login-->
    </main>
    
</body>
</html>