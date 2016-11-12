<?php 
	require ("db.php");
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header ("Location: index.php?msg=2");
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Bem Vindo ao Sistema.</h2>
	<h3> <a href="logout.php"> Sair</a></h3>
</body>
</html>