<?php 
	require ("db.php");

	$nome = $_POST['inputNome'];
	$email = $_POST['inputEmail'];
	$senha = md5($_POST['inputPassword']);

	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

	if ($conn->query($sql)==TRUE){
		header('Location: form_cadusu.php?msg=1');
	}else{
		echo $conn->error;
	}
	$conn->close();
 ?>