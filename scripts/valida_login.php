<?php
	# Faz a requisição de uma página exterior e inicia uma sessão
	session_start();
	include('../conexao/conexao.php');

	# Faz a busca dentro do banco de dados e retorna os resultado em uma variável
	$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email='".$_POST['email']."' AND senha='".$_POST['senha']."'") or die("Erro de conexão");
	$linhas = mysqli_num_rows($sql);

	# Pega a variável e joga em uma estrutura de decisão
	if ($linhas == 0) {
		header('Location: ../index.php?login=erro');
	}else{
		while ($dados = mysqli_fetch_assoc($sql)) {
			$_SESSION['nome_user'] = $dados['nome'];
			$_SESSION['email_user'] = $dados['email'];
			header('Location: question.php');
		}
	}
?>