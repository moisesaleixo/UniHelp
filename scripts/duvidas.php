<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/cards.css">
</head>
<body>

    <section class="cadastradas">
        <?php

            $id_email_user = $_SESSION['email_user'];

            $sql = mysqli_query($conexao, "SELECT * FROM duvidas ORDER BY id_duvida DESC");

            while ($chama = mysqli_fetch_assoc($sql)) { 
                $id_duvida = $chama['id_duvida'];
                $titulo = $chama['titulo'];
                $email = $chama['email'];
                $duvida = $chama['duvida'];
                ?>
                
                <div class="card">
                    <div class="titulo_duvida">
                        <h4>identificador: <?= $id_duvida; ?></h4>
                        <h3>Título: <span><?= $titulo; ?></span></h3>
                        <h3>Usuários: <span><?= $email; ?></span></h3>
                    </div>
                    <div class="texto_duvida">
                        <h3>Dúvida: </h3>
                        <p><?= $duvida; ?></p>
                    </div>
                    <a href="responder.php?id=<?= $id_duvida; ?>"><button>Responder</button></a>
                </div>
             
        <?php   
            }
        ?>
    </section>

</body>
</html>