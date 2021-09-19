<?php

include "conexao.php";

$id = $_POST["id"];

$nomeCategoria = $_POST["nome-categoria"];

$sql = "UPDATE `categoria` SET `nome_categoria`='$nomeCategoria' WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao, $sql);
?>

<!-- Texto a ser exibido após e inserção dos dados -->

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<div class="container principal">
    <h4>Categoria atualizada com sucesso!</h4>
    <br>
    <p><a href="listar-categorias.php" role="button" class="btn btn-primary">Atualizar nova categoria</a></p>
</div>