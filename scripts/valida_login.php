<?php
	session_start();
	include('../conexao/conexao.php');

	$usuarios_autenticado = false;

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$sql = "SELECT email, senha FROM usuarios WHERE email=$email";
	$resultado = $con->query($sql);
	$banco = $resultado->fetch_assoc();

	if ($banco['email'] != $email && $banco['senha'] != $senha) {
		header('Location: ../index.php?login=erro');
		$usuarios_autenticado = false;
		$_SESSION['autenticado'] = 'NAO';
	}else{
		header('Location: question.php');
		$usuarios_autenticado = true;
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['dados'] = $email;
	}

	$con->close();
	
?>