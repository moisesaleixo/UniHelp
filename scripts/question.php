<?php
require_once "valida_acesso.php";
include "../conexao/conexao.php";
/*
    $busca = $_GET['busca'];
    $sql = mysqli_query($conexao, "SELECT * FROM duvidas WHERE titulo LIKE '%$busca%' ") or die("Erro!");
    */
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
    <link rel="shortcut icon" href="../pictures/ponto-de-interrogacao.png" type="image/x-icon">
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

        <header>
            <!--Cabeçalho-->
            <div class="logo">
                <!--logo-->
                <a href="question.php"><img src="../pictures/logo2.png" alt=""></a>
            </div>
            <!--fim logo-->

            <div id="barra">
                <form action="question.php">
                    <input type="text" placeholder="Buscar..." class="barra_busca" name="busca">
                </form>
            </div>

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
        <!--fim Cabeçalho-->

        <div>
            <?php
            include('../conexao/conexao.php');

            switch (@$_REQUEST['page']) {
                case "perfil":
                    include('perfil.php');
                    break;
                case "duvidas":
                    include('cad_duv.php');
                    break;
                case "sair":
                    include('logout.php');
                    break;
                default:
                    if (!isset($_GET['busca'])) { ?>
                        <p class="error">Digite algo se quiser pesquisar</p>
                        <?php } else {
                        $busca = $_GET['busca'];
                        $sql = mysqli_query($conexao, "SELECT * FROM duvidas WHERE titulo LIKE '%$busca%' ") or die("Erro!");
                        while ($dado = mysqli_fetch_assoc($sql)) {
                        ?>
                            <section class="container_busca">
                                <div class="card_busca">
                                    <div class="dados_busca">
                                        <h4>Identificador: <?= $dado['id_duvida']; ?></h4>
                                        <h3>Título: <?= $dado['titulo']; ?></h3>
                                        <h3>Usuário: <?= $dado['email']; ?></h3>
                                    </div>
                                    <div class="texto__busca">
                                        <h3>Dúvida: </h3>
                                        <p><?= $dado['duvida']; ?></p>
                                    </div>
                                </div>
                            </section>
                    <?php
                        }
                    }
                    ?>
            <?php
                    include("duvidas.php");
            }
            ?>

        </div>
    </main>

</body>

</html>