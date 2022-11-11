<?php
    require_once "valida_acesso.php";
    include "../conexao/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas</title>
    <link rel="stylesheet" type="text/css" href="../css/quest.css">
    <link rel="shortcut icon" href="../pictures/ponto-de-interrogacao.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/respostas.css">
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

    <main>
        <header>
            <!--Cabeçalho-->
            <div class="logo">
                <!--logo-->
                <a href="question.php"><img src="../pictures/logo2.png" alt=""></a>
            </div>
            <!--fim logo-->

            <div>
                <nav>
                    <ul>
                        <li class="link"><a class="dados" href="question.php?page-perfil">Perfil</a></li>
                        <li class="link"><a class="dados" href="question.php?page=duvidas">Dúvidas</a></li>
                        <li class="link"><a class="dados" href="question.php">Inicio</a></li>
                        <li class="link"><a class="dados" href="logout.php">Sair</a></li>
                    </ul>
                </nav>
            </div>
        </header>

		<?php
		
			$_SESSION['id'] = $_GET['id'];
			$id = $_SESSION['id'];

			$sql = mysqli_query($conexao, "SELECT * FROM duvidas WHERE id_duvida='". $id ."'") or die('Erro!');
			while ($duvida = mysqli_fetch_assoc($sql)) { ?>
				<section class="container_resposta">
					<div class="card_principal">
						<div class="card_inicio">
							<h3>Id dúvida: <span><?= $duvida['id_duvida']; ?></span></h3>
							<h3>Usuário: <span><?= $duvida['email']; ?></span></h3>
							<h3>Título: <span><?= $duvida['titulo']; ?></span></h3>
						</div>
						<div class="card_duvida">
							<h3>Dúvida: </h3>
							<p><?= $duvida['duvida']; ?></p>
						</div>
					</div>
				</section>
		<?php		
			}
		?>
			<section class="responder">
				<form action="../cadastros/comentario.php" method="POST" class="form_resposta">
					<input class="texto" type="text" name="resposta" placeholder="Sua resposta aqui...">
					<input class="btn" type="submit" value="Responder">
				</form>
			</section>

			<?php
				$id = $_SESSION['id'];

				$sql = mysqli_query($conexao, "SELECT * FROM respostas WHERE id_duvida='" . $id . "'");
				while ($puxa = mysqli_fetch_assoc($sql)) { ?>
				
					<section class="resposta">
						<div class="resposta_barra">
							<div class="email">
								<h3><?= $puxa['email']; ?></h3>
							</div>
							<div class="comentario">
								<p><?= $puxa['resposta']; ?></p>
							</div>
						</div>
					</section>
			<?php	
				}
			?>


			
    </main>

</body>

</html>