<?php
    require_once('valida_acesso.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/quest.css">
    <link rel="stylesheet" href="../css/cards.css">
    <link rel="shortcut icon" href="../pictures/ponto-de-interrogacao" type="image/x-icon">
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

        <section class="card_container">
            <form action="../cadastros/cadastra_duvida.php" method="get" class="card_form">
                <label>Título</label>
                <input type="text" name="titulo">
                <label for="">Dúvida</label>
                <textarea name="duvida" id="" cols="30" rows="3" placeholder="Sua dúvida aqui em 1000 caracteres" maxlength="1000"></textarea>
                <input type="submit" value="Cadastrar dúvida">
            </form>
        </section>

        <?php
            if (isset($_GET['sem']) && $_GET['sem'] == 'nada'){
        ?>
                <div>
                    <p class="error">Nenhuma dúvida foi colocada</p>
                </div>
        <?php
            }
        ?>

</body>
</html>