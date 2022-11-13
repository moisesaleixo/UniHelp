<?php
    # Faz a requisição de páginas para usar em algumas funções
    require_once 'valida_acesso.php';
    include '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/perfil.css">
    <link rel="shortcut icon" href="../pictures/icon.png" type="image/x-icon">
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
    <?php
    # Pega o valor da sessão email_user e atribui a uma variável
    $email_user = $_SESSION['email_user']; // A sessão tem o email do usuário logado

    # Busca no banco os dados pertencentes ao usuário logado
    $sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email='". $email_user ."'") or die(mysqli_error($conexao));

    # Chama os dados pertencentes a determinado email
    while ($aux = mysqli_fetch_assoc($sql)) {  ?>

        <!-- Exibe os dados do usuário que está logado -->
        <section class="dados_banco">        
            <div class="nome">
                <h2>Nome:</h2> <?= "<span><h2> " . $aux['nome'] . " </h2></span>"; ?>
                <h2>Sobrenome:</h2> <?= "<span><h2> " . $aux['sobrenome'] . " </h2></span>"; ?>
            </div>
            <div class="data">
                <h2>Data Nascimento:</h2> <?= "<span><h2>".$aux['data_nasc']."</h2></span>"; ?>
            </div>
            <div class="curso">
                <h2>Curso:</h2> <?= "<span><h2> " . $aux['curso'] . " </h2></span>"; ?>
            </div>
                <div class="email">
                    <h2>Email:</h2> <?= "<span><h2> " . $aux['email'] . " </h2></span>"; ?>
                </div>
        </section>

    <?php } ?>

        <!-- Formulário para atualizar os dados do usuário logado -->
        <section class="altera_dados">
            <form method="post" action="../cadastros/atualiza.php">
                <div>
                    <label>Nome:</label>
                    <input type="text" name="nome">
                    <label>Sobrenome:</label>
                    <input type="text" name="sobrenome">
                </div>
                <div>
                    <label>Data Nascimento:</label>
                    <input type="Date" name="data_nasc">
                </div>
                <div>
                    <label>Curso:</label>
                    <input type="text" name="curso">
                </div>
                <div>
                    <label>Email:</label>
                    <input type="email" name="email">
                    <label>Senha:</label>
                    <input type="text" name="senha">
                </div>
                <div>
                    <input class="botao_atualizar" type="submit" value="Atualizar">
                </div>
            </form>
        </section>

        <?php if (isset($_GET['preencher']) && $_GET['preencher'] == 'tudo'){ ?>
            <div><p class="error">Preencha todos os dados</p></div>
        <?php } ?>

</body>

</html>