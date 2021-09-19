<?php

include('conexao.php');
$categoria = $_POST['categoria'];
$sql = "INSERT INTO categoria (nome_categoria) values ('$categoria')";
$inserir = mysqli_query($conexao, $sql);
?>

<!-- Texto a ser exibido após a inserção dos dados -->

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<div class="container principal">
    <h4>Categoria adicionada com sucesso!</h4>
    <br>
    <p><a href="adicionar-categoria.php" role="button" class="btn btn-primary">Adicionar nova categoria</a></p>
</div>