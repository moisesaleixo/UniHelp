<?php
require_once 'valida_acesso.php';
include '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="shortcut icon" href="../pictures/ponto-de-interrogacao" type="image/x-icon">
</head>

<body>

    <?php
    $id_email = $_SESSION['email_user'];

    $sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email='" . $id_email . "'") or die(mysqli_error($conexao));

    while ($aux = mysqli_fetch_assoc($sql)) {  ?>

        <section>
            
            <div class="nome">
                <h2>Nome: </h2> <?= "<span><h2> " . $aux['nome'] . " </h2></span>"; ?>
                <h2>Sobrenome: </h2> <?= "<span><h2> " . $aux['sobrenome'] . " </h2></span>"; ?>
            </div>
            <div class="curso">
                <h2>Curso: </h2> <?= "<span><h2> " . $aux['curso'] . " </h2></span>"; ?>
            </div>
                <div class="email">
                    <h2>Email: </h2> <?= "<span><h2> " . $aux['email'] . " </h2></span>"; ?>
                </div>
        </section>
    <?php } ?>
    
    <!--
        echo "Nome: " . $aux["nome"] . "<br />";
        echo "Sobrenome: " . $aux["sobrenome"] . "<br />";
        echo "Curso: " . $aux["curso"] . "<br />";
        echo "Email: " . $aux["email"] . "<br />";
        echo "Senha: " . $aux["senha"] . "<br />";
    -->

    <section>
        <form method="post" action="atualiza.php">
            <div class="nomes">
                <label>Nome: </label>
                <input type="text" name="nome">
                <label>Sobrenome: </label>
                <input type="text" name="sobrenome">
            </div>
            <div class="dados">
                <label>Data de Nascimento: </label>
                <input type="Data" name="data_nasc">
                <label>Curso: </label>
                <input type="text" name="curso">
                <label>Email: </label>
                <input type="email" name="email">
                <label>Senha: </label>
                <input type="password" name="senha">
            </div>
            <div class="butao_atualiza_dados">
                <input type="submit">
            </div>
        </form>
    </section>

</body>

</html>