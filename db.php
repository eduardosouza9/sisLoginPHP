<<<<<<< HEAD
<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "aula";

	$conn = mysqli_connect($host, $user, $pass) or die (mysqli_error());
	mysqli_select_db($conn, $banco) or die (mysqli_error());

=======
<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "aula";

	$conn = mysqli_connect($host, $user, $pass) or die (mysqli_error());
	mysqli_select_db($conn, $banco) or die (mysqli_error());

>>>>>>> origin/master
 ?>