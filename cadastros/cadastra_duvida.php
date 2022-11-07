<?php
    session_start();
    include "../conexao/conexao.php";

	$duvida = $_GET['duvida'];
	$id_email = $_SESSION['dados'];

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
/*
	$sql = "INSERT INTO duvidas (duvida, id_email) 
	VALUES ('{$duvida}', '{$id_email}')";

	$resultado = $con->query($sql);

	$con->close();

	header("Location: ../scripts/question.php");
*/
?>