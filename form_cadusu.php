<?php
	require ("db.php");
	if(isset($_GET['msg'])){
			$msg = $_GET['msg'];

			switch($msg){
				case 1:
				?>
					<div class="message">
						<div class="alert alert-success">
							<a href="index.php" class="close" data-dismiss="alert">&times</a>
							Usuário cadastrado com sucesso.
						</div>
					</div>
				<?php
				break;
			}
		}
				?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastro de Usuários</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="cadusu.php" method="post" class="form-cadusu">
			<h2 class="form-login-heading">Cadastre o usuário</h2>
			<label for="inputNome">Nome</label>
			<input type="text" id="inputNome" name="inputNome" class="form-control" placeholder="Nome" required autofocus>
			<label for="inputEmail">E-mail</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required>
			<label for="inputPassword">Senha</label>
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>
			<button type="submit" class="btn btn-lg btn-primary btn-block">Cadastrar</button>
		</form>
	</div>

	<div class="listagem">
		<table border="1" class="table table-hover">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Email</th>
			</tr>
			<?php
				$sql = "SELECT id, email, nome FROM usuarios";
				$result = $conn->query($sql);

				while ($row = $result->fetch_array()){
					?>
					<tr>
						<td> <?php echo $row["id"]; ?></td>
						<td><?php echo $row["nome"]; ?></td>
						<td><?php echo $row["email"]; ?></td>
					</tr>
			<?php 		
				}
				$conn->close();
			?>
		</table>
	</div>
</body>
</html>