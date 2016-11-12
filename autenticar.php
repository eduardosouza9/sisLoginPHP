<?php 
	require ("db.php");

	$email = $_POST['inputEmail'];
	$senha = md5($_POST['inputPassword']);

	$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
	$row = mysqli_num_rows($query);

	if ($row > 0){
		session_start();
		$_SESSION['email'] = $_POST['inputEmail'];
		$_SESSION['senha'] = $_POST['inputPassword'];
		header('Location: dashboard.php');
	}else{
		header('Location: index.php?msg=1');
	}
?>