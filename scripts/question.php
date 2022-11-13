<?php
    
    # Inclui páginas que serão usadas depois
    require_once "valida_acesso.php";
    include "../conexao/conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniHelp</title>
    <link rel="stylesheet" type="text/css" href="../css/quest.css">
    <link rel="stylesheet" type="text/css" href="../css/cards.css">
    <link rel="shortcut icon" href="../pictures/icon.png" type="image/x-icon">
    <style type="text/css">
        .error {
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

        <!-- Área de cabeçalho -->
        <header>
            <!-- Área da logo -->
            <div class="logo">
                <a href="question.php"><img src="../pictures/logo.png" alt=""></a>
            </div>

            <!-- Cria a barra de pesquisa -->
            <div id="barra">
                <form action="question.php">
                    <input type="text" placeholder="Buscar..." class="barra_busca" name="busca">
                    <button type="submit"><img src="../pictures/lupa.png" width="20px"></button>
                </form>
            </div>

            <!-- Cria o menu de navegação -->
            <div>
                <nav>
                    <ul>
                        <li class="link"><a class="dados" href="?page=perfil">Perfil</a></li>
                        <li class="link"><a class="dados" href="?page=duvidas">Dúvidas</a></li>
                        <li class="link"><a class="dados" href="question.php">Voltar</a></li>
                        <li class="link"><a class="dados" href="logout.php">Sair</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Fim da área de cabeçalho -->

        <!-- Local que chama as outras páginas -->
        <div>
            <?php
            # Chama a conexão com o banco
            include('../conexao/conexao.php');

            # switch que chama as outras páginas atráves dos link do menu
            switch (@$_REQUEST['page']) {
                case "perfil":
                    require('perfil.php');
                    break;
                case "duvidas":
                    include('cad_duv.php');
                    break;
                case "sair":
                    include('logout.php');
                    break;
                default: ?>

            <section class="cadastradas">
                <?php
                    # Chama e exibi os resultados da busca feitos na barra de pesquisa 
                    if (!isset($_GET['busca'])) { 
                        
                     } else {
                        $busca = $_GET['busca'];
                        $sql = mysqli_query($conexao, "SELECT * FROM duvidas WHERE titulo LIKE '%$busca%' ") or die("Erro!");
                        # Puxa os dados do banco
                        while ($dado = mysqli_fetch_assoc($sql)) {
                        ?>
                            <!-- Exibe na tela os dados que foram encontrados -->
                            <div class="card">
                                <div class="dados_busca">
                                    <h3>Título: <a href="responder.php?id=<?=$dado['id_duvida'];?>"><?= $dado['titulo']; ?></a></h3>
                                    <h3>Usuário: <?= $dado['email']; ?></h3>
                                </div>
                                <div class="texto__busca">
                                    <h3>Dúvida: </h3>
                                    <p><?= $dado['duvida']; ?></p>
                                </div>
                            </div>
                            
                    <?php } } ?>
            </section>
            <?php include("duvidas.php"); } ?>

        </div>
        <!-- Fim do local que chama as outras páginas -->
    </main>

</body>

</html>