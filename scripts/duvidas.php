<?php

    # faz a requisição de páginas que serão usadas depois
    include '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/cards.css">
</head>
<body>

    <!-- Sessão que exibe todas as dúvidas cadastradas -->
    <section class="cadastradas">
        <?php
            # Atribui o valor de um sessão a uma variavel
            $id_email_user = $_SESSION['email_user'];

            # Faz a busca no banco e exibe em ordem decrescente de acordo com o ID da dúvida
            $sql = mysqli_query($conexao, "SELECT * FROM duvidas ORDER BY id_duvida DESC");

            # Exibe as dúvidas cadastradas com seus dados 
            while ($chama = mysqli_fetch_assoc($sql)) { 
                $idDuvida = $chama['id_duvida'];
                $titulo = $chama['titulo'];
                $email = $chama['email'];
                $duvida = $chama['duvida'];
        ?>
                
                <!-- Faz a exibição das dúvidas e os dados ligados a ela -->
                <div class="card">
                    <div class="titulo_duvida">
                        <h3>Título: <span><a href="responder.php?id=<?=$idDuvida;?>"><?= $titulo; ?></a></span></h3>
                        <h3>Postador: <span><?= $email; ?></span></h3>
                    </div>
                    <div class="texto_duvida">
                        <h3>Dúvida: </h3>
                        <p><?= $duvida; ?></p>
                    </div>
                    <a class="link_botao" href="responder.php?id=<?=$idDuvida;?>">Responder</a>
                </div>
        <?php } ?>
    </section>
    <!-- Fim da sessão que exibe todas as dúvidas cadastradas -->

</body>
</html>