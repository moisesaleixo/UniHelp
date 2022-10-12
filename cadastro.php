<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="pictures/ponto-de-interrogacao.png" type="image/x-icon">
</head>
<body>
    
    <main>
        <section id="esquerda"><!--fundo da esquerda-->
            <img src="imagens_modelo/earth-5272550_1280.png" alt="">
        </section><!--fundo da esquerda-->

        <section id="direita"><!--Cadastro-->
            <div><!--fundo direita-->
                <div><!--Dados-->
                    <div>
                        <div class="logo logo_cadastro"><!--Logo-->
                            <h1>UniHelp</h1>
                        </div><!--Logo-->
                        <nav class="links_pages"><!--Links-->
                            <a href="index.php">Entrar</a>
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
                    <input class="detalhe" type="text" name="data_nasc" id="" placeholder="Data Nascimento">
                    <select class="detalhe" name="area_conhecimento" id="">
                        <option value="">Ciências Agrária</option>
                        <option value="">Ciências Biológicas</option>
                        <option value="">Ciências Exatas e da Terra</option>/
                        <option value="">Ciências Humanas</option>
                        <option value="">Ciências da Saúde</option>
                        <option value="">Ciências Sociais Aplicadas</option>
                        <option value="">Engenharias</option>
                        <option value="">Linguística, Letras e Artes</option>
                    </select>
                    <input class="detalhe" type="text" name="curso" id="" placeholder="Curso">
                    <input class="detalhe" type="text" name="email" id="" placeholder="Email">
                    <input class="detalhe" type="text" name="senha" id="" placeholder="Senha">
                    <input class="detalhe" type="text" name="conf_senha" id="" placeholder="Confirmação da senha">

                    <div><!--Botão Envias-->
                        <input type="submit" value="Cadastrar" type="submit" class="buttom">
                    </div><!--Botão Envias-->
                </form>
            </div><!--formulário-->
        </section><!--Cadastro-->
    </main>

</body>
</html>