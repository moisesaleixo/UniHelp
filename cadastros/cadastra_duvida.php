<?php
    session_start();
    include "../conexao/conexao.php";

    $titulo = $_GET['titulo'];
	$duvida = $_GET['duvida'];
	$email_user = $_SESSION['email_user'];

	if (empty($duvida) || empty($email_user)) {
		header('Location: ../scripts/cad_duv.php?page=duvidas?sem=nada');
	}else{
		$in = mysqli_query($conexao, "INSERT INTO duvidas (titulo , duvida, email) VALUES ('$titulo' 
			, '$duvida', '$email_user')");
		header('Location: ../scripts/question.php');
	}
	
?>