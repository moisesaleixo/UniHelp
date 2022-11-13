<?php

	# Inclusao de página e inicializando uma sessão
    session_start();
    include "../conexao/conexao.php";

    # Pegando os dados e atribuindo a variaveis
    $titulo = $_GET['titulo'];
	$duvida = $_GET['duvida'];
	$email_user = $_SESSION['email_user'];

	# Analisando se existem os dados e cadastra eles
	if (empty($duvida) || empty($email_user)) {
		header('Location: ../scripts/cad_duv.php?page=duvidas?sem=nada');
	}else{
		$in = mysqli_query($conexao, "INSERT INTO duvidas (titulo , duvida, email) VALUES ('$titulo' 
			, '$duvida', '$email_user')");
		header('Location: ../scripts/question.php');
	}
	
?>