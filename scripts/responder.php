<?php

	# Fas a requisição de páginas que serão usadas depois
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
    <link rel="shortcut icon" href="../pictures/icon.png" type="image/x-icon">
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
    	<!-- Área de cabeçalho -->
        <header>
            <div class="logo">
                <a href="question.php"><img src="../pictures/logo.png" alt=""></a>
            </div>

            <div>
                <nav>
                    <ul>
                        <li class="link"><a class="dados" href="question.php?page-perfil">Perfil</a></li>
                        <li class="link"><a class="dados" href="question.php?page=duvidas">Dúvidas</a></li>
                        <li class="link"><a class="dados" href="question.php">Voltar</a></li>
                        <li class="link"><a class="dados" href="logout.php">Sair</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Fim da área de cabeçalho -->

		<?php
			# Atribui valor a uma sessão e atribui o valor da sessão a uma variável
			$_SESSION['id'] = $_GET['id'];
			$id = $_SESSION['id'];

			# Busca no banco as dúvidas com o id coletado pela sessão
			$sql = mysqli_query($conexao, "SELECT * FROM duvidas WHERE id_duvida='". $id ."'") or die('Erro!');

			# Exibe os dados encontrados no banco atribuidos a uma variável
			while ($duvida = mysqli_fetch_assoc($sql)) { ?>

				<!-- Exibe os dados dá dúvida chamados pelo ID -->
				<section class="container_resposta">
					<div class="card_principal">
						<div class="card_inicio">
							<h3>Usuário: <span><?= $duvida['email']; ?></span></h3>
							<h3>Título: <span><?= $duvida['titulo']; ?></span></h3>
						</div>
						<div class="card_duvida">
							<h3>Dúvida: </h3>
							<p><?= $duvida['duvida']; ?></p>
						</div>
					</div>
				</section>
		<?php } ?>

		<!-- Cria o campo para dar a resposta para a dúvida chamada -->
		<section class="responder">
			<form action="../cadastros/comentario.php" method="POST" class="form_resposta">
				<input class="texto" type="text" name="resposta" placeholder="Sua resposta aqui...">
				<input class="btn" type="submit" value="Responder">
			</form>
		</section>
		<!-- Fim do cria o campo para dar a resposta para a dúvida chamada -->

		<!-- Local que exibe as respostadas dadas -->
		<section class="resposta">
			<?php
				# Pega o ID da dúvida chamada
				$id = $_SESSION['id'];

				# Busca no banco as respostas atribuidas a determinada dúvida
				$sql = mysqli_query($conexao, "SELECT * FROM respostas WHERE id_duvida='" . $id . "'");
				
				# Chama as respostas atribuidas a determinada dúvida
				while ($puxa = mysqli_fetch_assoc($sql)) { ?>
						
					<!-- Exibe as respostas encontradas -->	
					<div class="resposta_barra">
						<div class="email">
							<h3><?= $puxa['email']; ?></h3>
						</div>
						<div class="comentario">
							<p><?= $puxa['resposta']; ?></p>
						</div>
					</div>
			<?php } ?>
		</section>
		<!-- Fim do local que exibe as respostadas dadas -->

    </main>

</body>

</html>