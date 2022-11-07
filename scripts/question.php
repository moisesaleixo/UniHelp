<?php
    require_once "valida_acesso.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="../css/quest.css">
    <link rel="stylesheet" href="../css/cards.css">
    <link rel="shortcut icon" href="../pictures/ponto-de-interrogacao.png" type="image/x-icon">
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
                <input type="text" placeholder="Buscar..." class="barra_busca">
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
            }
            ?>
        </div>
    </main>

</body>

</html>