<!DOCTYPE html>
<html lang="pt-br">

<?php include 'permissionamento.php'; ?>

<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<title>Menu de Opções</title>
</head>

<body>



	<div class="container principal">

		<div class="row">
			<div class="col-sm-12">
				<p class="text-right">Olá, <?php echo $_SESSION['nome']; ?> - <a href="logout.php" class="text-danger">Sair</a></p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<p>
					<i class="fas fa-user text-success"></i> Administrador
					<i class="fas fa-user text-warning"></i> Vendedor
					<i class="fas fa-user text-primary"></i> Cliente
				</p>
			</div>
		</div>

		<div class="row">

			<!-- exibe para 1 e 2 -->
			<?php if (($nivel == 1) || ($nivel == 2)) { ?>

				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Adicionar produtos</h5>
							<p class="card-text">
								Opção para adicionar produtos em nosso estoque.
							</p>
							<a href="adicionar-produto.php" class="btn btn-warning">Cadastrar produto</a>
						</div>
					</div>
				</div>

				<!-- fecha php -->
			<?php } ?>

			<!-- exibe para 1, 2 e 3 -->
			<?php if (($nivel == 1) || ($nivel == 2) || ($nivel == 3)) { ?>

				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Lista de produtos</h5>
							<p class="card-text">
								Visualizar, editar e excluir produtos
							</p>
							<a href="listar-produtos.php" class="btn btn-primary">VIsualizar produtos</a>
						</div>
					</div>
				</div>

				<!-- fecha php -->
			<?php } ?>

		</div>

		<br>

		<div class="row">

			<!-- exibe para 1 e 2 -->
			<?php if (($nivel == 1) || ($nivel == 2)) { ?>

				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Adicionar categoria</h5>
							<p class="card-text">
								Opção para adicionar categoria de produtos.
							</p>
							<a href="adicionar-categoria.php" class="btn btn-warning">Cadastrar categoria</a>
						</div>
					</div>
				</div>

				<!-- fecha php -->
			<?php } ?>

			<!-- exibe para 1, 2 e 3 -->
			<?php if (($nivel == 1) || ($nivel == 2) || ($nivel == 3)) { ?>

				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Lista de categorias</h5>
							<p class="card-text">
								Visualizar, editar e excluir categorias
							</p>
							<a href="listar-categorias.php" class="btn btn-primary">Visualizar categorias</a>
						</div>
					</div>
				</div>

				<!-- fecha php -->
			<?php } ?>

		</div>

		<br>

		<div class="row">

			<!-- exibe para 1 e 2 -->
			<?php if (($nivel == 1) || ($nivel == 2)) { ?>

				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Adicionar fornecedor</h5>
							<p class="card-text">
								Opção para adicionar fornecedores.
							</p>
							<a href="adicionar-fornecedor.php" class="btn btn-warning">Cadastrar fornecedores</a>
						</div>
					</div>
				</div>

				<!-- fecha php -->
			<?php } ?>

			<!-- exibe para 1, 2 e 3 -->
			<?php if (($nivel == 1) || ($nivel == 2) || ($nivel == 3)) { ?>

				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Lista de fornecedores</h5>
							<p class="card-text">
								Visualizar, editar e excluir fornecedores
							</p>
							<a href="listar-fornecedores.php" class="btn btn-primary">Visualizar fornecedores</a>
						</div>
					</div>
				</div>

				<!-- fecha php -->
			<?php } ?>

		</div>

		<br>

		<div class="row">

			<!-- exibe apenas para 1 -->
			<?php if ($nivel == 1) { ?>

				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Adicionar usuários</h5>
							<p class="card-text">
								Opção para adicionar usuários.
							</p>
							<a href="adicionar-usuario.php" class="btn btn-success">Cadastrar usuários</a>
						</div>
					</div>
				</div>

				<!-- fecha php -->
			<?php } ?>

			<!-- exibe apenas para 1 -->
			<?php if ($nivel == 1) { ?>

				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Lista de usuários</h5>
							<p class="card-text">
								Visualizar, editar e excluir usuários
							</p>
							<a href="listar-usuarios.php" class="btn btn-success">Visualizar usuários</a>
						</div>
					</div>
				</div>

				<!-- fecha php -->
			<?php } ?>

		</div>
		<br>

		<div class="row">

			<!-- exibe apenas para 1 -->
			<?php if ($nivel == 1) { ?>

				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Aprovar de usuários</h5>
							<p class="card-text">
								Visualizar, aprovar e excluir usuários
							</p>
							<a href="aceitar-usuarios.php" class="btn btn-success">Aprovar usuários</a>
						</div>
					</div>
				</div>

				<!-- fecha php -->
			<?php } ?>

		</div>

		<br>

	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>