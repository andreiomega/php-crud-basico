<!DOCTYPE html>
<html lang="pt-br">

<?php include 'permissionamento.php'; ?>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

	<title>Listagem de Produtos</title>
</head>

<body>
	<div class="container principal">
		<h3>Lista de produtos</h3>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">Número</th>
					<th scope="col">Nome do produto</th>
					<th scope="col">Categoria</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Fornecedor</th>

					<!-- exibe para 1 e 2 -->
					<?php if (($nivel == 1) || ($nivel == 2)) { ?>

						<th scope="col">Ação</th>

						<!-- fecha php -->
					<?php } ?>


				</tr>
			</thead>

			<?php include "conexao.php";

			$sql = "SELECT * FROM `estoque`";
			$busca = mysqli_query($conexao, $sql);

			while ($array = mysqli_fetch_array($busca)) {
				$id_estoque = $array["id_estoque"];
				$numero_produto = $array["numero_produto"];
				$nome_produto = $array["nome_produto"];
				$categoria = $array["categoria"];
				$quantidade = $array["quantidade"];
				$fornecedor = $array["fornecedor"];
			?>
				<tbody>
					<tr>

						<td><?php echo $numero_produto; ?>
						</td>
						<td><?php echo $nome_produto; ?>
						</td>
						<td><?php echo $categoria; ?>
						</td>
						<td><?php echo $quantidade; ?>
						</td>
						<td><?php echo $fornecedor; ?>
						</td>

						<td>
							<!-- exibe para 1 e 2 -->
							<?php if (($nivel == 1) || ($nivel == 2)) { ?>

								<a href="editar-produto.php?id=<?php echo $id_estoque; ?>" class="btn btn-sm btn-warning" role="button"><i class="fas fa-edit"></i></a>

								<!-- fecha php -->
							<?php } ?>

							<!-- exibe apenas para 1 -->
							<?php if ($nivel == 1) { ?>

								<a href="excluir-produto.php?id=<?php echo $id_estoque; ?>" class="btn btn-sm btn-danger" role="button"><i class="fas fa-trash-alt"></i></a>

								<!-- fecha php -->
							<?php } ?>

						</td>

					<?php } ?>
					<!-- fechamento do while -->
					</tr>
				</tbody>
		</table>

		<div class="form-botao">
			<a href="index.php" type="submit" class="btn btn-primary">Voltar</a>
		</div>
	</div>

	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>