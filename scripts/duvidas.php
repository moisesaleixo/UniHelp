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
                $idDuvida = $chama['id_duvida'];
                $titulo = $chama['titulo'];
                $email = $chama['email'];
                $duvida = $chama['duvida'];
                ?>
                
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
             
        <?php   
            }
        ?>
    </section>

    <section>

    </section>

</body>
</html>