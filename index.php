<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Página de Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>
	<div class="container principal login">
		<h4>Acesso</h4>
		<form action="validar-usuario.php" method="post">
			<div class="form-group">

				<label for="nome-usuario">Usuário</label>
				<input type="text" name="nome-usuario" id="nome-usuario" class="form-control" placeholder="Digite o nome de usuário" required>
			</div>
			<div class="form-group">
				<label for="senha-usuario">Senha</label>
				<input type="password" name="senha-usuario" id="senha-usuario" class="form-control" placeholder="Digite sua senha" required>
			</div>
			<div class="form-botao">
				<button type="submit" class="btn btn-success">Entrar</button>
			</div>
			<p><a href="adicionar-conta.php">Crie sua conta</a></p>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>