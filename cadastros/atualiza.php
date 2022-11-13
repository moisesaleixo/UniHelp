<?php
	
	# Inclusao de página e inicializando uma sessão
	session_start();
	include '../conexao/conexao.php';

	# Pegando os dados e atribuindo a uma variável
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$data_nasc = $_POST['data_nasc'];
	$curso = $_POST['curso'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	# Puxando a sessão email_user que tem o email do usuário logado
	$user = $_SESSION['email_user'];

	# Vendo se os valores foram atribuidos para fazer o UPDATE
	if (isset($nome) || isset($sobrenome) || isset($data_nasc) || isset($curso) || isset($email) || isset($senha)) {
		$up = mysqli_query($conexao, "UPDATE usuarios SET nome='$nome', sobrenome='$sobrenome', data_nasc='$data_nasc', curso='$curso', email='$email', senha='$senha' WHERE email='".$user."'");
		header('Location: ../scripts/question.php?dados=atualizados');
	}else{
		header('Location: ../scripts/question.php?dados=incompletos');
	}


?>