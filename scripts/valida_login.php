<?php
	include("conexao.php");

	session_start();

	$usuarios_autenticado = false;

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "SELECT email, senha FROM usuarios";

	$resultado = $con->query($sql);

	$banco = $resultado->fetch_assoc();

	if ($banco['email'] != $_POST['email'] && $banco['senha'] != $_POST['senha']) {
		header('Location: ../index.php?login=erro');
		$usuarios_autenticado = false;
		$_SESSION['autenticado'] = 'NAO';
	}else{
		header('Location: question.php');
		$usuarios_autenticado = true;
		$_SESSION['autenticado'] = 'SIM';
	}

	$con->close();
	
?>