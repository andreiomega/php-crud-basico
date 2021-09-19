<?php

include "conexao.php";

$id = $_GET["id"];

$sql = "DELETE FROM `categoria` WHERE id_categoria = $id";

$deletar = mysqli_query($conexao, $sql);
?>

<!-- Texto a ser exibido após e inserção dos dados -->

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<div class="container principal">
    <h4>Categoria excluída com sucesso!</h4>
    <br>
    <p><a href="listar-categorias.php" role="button" class="btn btn-primary">Excluir nova categoria</a></p>
</div>