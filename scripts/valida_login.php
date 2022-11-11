<?php
	session_start();
	include('../conexao/conexao.php');

	$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email='".$_POST['email']."' AND senha='".$_POST['senha']."'") or die("Erro de conexão");
	$linhas = mysqli_num_rows($sql);

	if ($linhas == '') {
		header('Location: ../index.php');
		$_SESSION['autenticado'] = 'NAO';
	}else{
		while ($dados = mysqli_fetch_assoc($sql)) {
			$_SESSION['nome_user'] = $dados['nome'];
			$_SESSION['email_user'] = $dados['email'];
			$_SESSION['autenticado'] = 'SIM';
			header('Location: question.php');
		}
	}
?>