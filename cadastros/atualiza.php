<?php
	session_start();
	include '../conexao/conexao.php';

	$nomeNovo = $_POST['nome'];
	$sobrenomeNovo = $_POST['sobrenome'];
	$data_nascNovo = $_POST['data_nasc'];
	$cursoNovo = $_POST['curso'];
	$emailNovo = $_POST['email'];
	$senhaNova = $_POST['senha'];

	$user = $_SESSION['email_user'];

	if (empty($nomeNovo) || empty($sobrenomeNovore) || empty($data_nascNovo) || empty($cursoNovo) || empty($emailNovo) || empty($senhaNova)) {
		header('Location: perfil.php?preencher=tudo');
	}else{
		$up = mysqli_query($conexao, "UPDATE usuarios SET nome='$nomeNovo',sobrenome='$sobrenomeNovo', data_nasc='$data_nascNovo', curso='$cursoNovo', email='$emailNovo', senha='$senhaNova' WHERE email='$user'");
		header('Location: ../scripts/question.php');
	}


?>