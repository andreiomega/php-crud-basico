<!DOCTYPE html>

<?php
include "conexao.php";

?>

<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<title>Formulário de Cadastro</title>
</head>

<body>
	<div class="container principal">
		<h4>Formulário de Cadastro</h4>
		<form action="inserir-produto.php" method="post">
			<div class="form-group">
				<label for="numero-produto">Número do produto</label>
				<input type="number" class="form-control" id="numero-produto" name="numero-produto" placeholder="Insira o número do produto" required />
			</div>

			<div class="form-group">
				<label for="nome-produto">Nome do produto</label>
				<input type="text" class="form-control" id="nome-produto" name="nome-produto" placeholder="Insira o número do produto" required />
			</div>

			<!-- FORMULÁRIO HTML
			<div class="form-group">
				<label for="categoria">Categoria</label>
				<select class="form-control" id="categoria" name="categoria">
					<option>Periféricos</option>
					<option>Hardware</option>
					<option>Software</option>
					<option>Games</option>
				</select>
			</div>
			-->

			<!-- FORMULÁRIO PHP -->
			<div class="form-group">
				<label for="categoria">Categoria</label>
				<select class="form-control" id="categoria" name="categoria">
					<?php
					$sql_categoria = "SELECT * FROM categoria order by nome_categoria ASC";
					$buscar_categoria = mysqli_query($conexao, $sql_categoria);
					while ($array = mysqli_fetch_array($buscar_categoria)) {
						$id_categoria = $array["id_categoria"];
						$nome_categoria = $array["nome_categoria"];
					?>
						<option><?php echo $nome_categoria ?></option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="quantidade">Quantidade</label>
				<input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Insira a quantidade do produto" required />
			</div>

			<!-- FORMULÁRIO HTML
			<div class="form-group">
				<label for="fornecedor">Fornecedor</label>
				<select class="form-control" id="fornecedor" name="fornecedor">
					<option>Kabum</option>
					<option>Terabyte Shop</option>
					<option>Pichau</option>
					<option>Alligator Shop</option>
				</select>
			</div>
			-->

			<!-- FORMULÁRIO PHP -->
			<div class="form-group">
				<label for="fornecedor">Fornecedor</label>
				<select class="form-control" id="fornecedor" name="fornecedor">
					<?php
					$sql_fornecedor = "SELECT * FROM fornecedor order by nome_fornecedor ASC";
					$buscar_fornecedor = mysqli_query($conexao, $sql_fornecedor);
					while ($array_fornecedor = mysqli_fetch_array($buscar_fornecedor)) {
						$id_fornecedor = $array_fornecedor["id_fornecedor"];
						$nome_fornecedor = $array_fornecedor["nome_fornecedor"];
					?>
						<option><?php echo $nome_fornecedor ?></option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="quantidade">Quantidade</label>
				<input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Insira a quantidade do produto" required />
			</div>

			<div class="form-botao">
				<a href="index.php" type="submit" class="btn btn-primary">Voltar</a>
				<button type="submit" class="btn btn-success">
					Cadastrar
				</button>
			</div>
		</form>
	</div>

	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>