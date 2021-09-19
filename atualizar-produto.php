<?php

include "conexao.php";

$id = $_POST["id"];

$nomeProduto = $_POST["nome-produto"];
$categoria = $_POST["categoria"];
$quantidade = $_POST["quantidade"];
$fornecedor = $_POST["fornecedor"];

$sql = "UPDATE `estoque` SET `nome_produto`='$nomeProduto',`categoria`='$categoria',`quantidade`='$quantidade',`fornecedor`='$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao, $sql);
?>

<!-- Texto a ser exibido após e inserção dos dados -->

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<div class="container principal">
    <h4>Produto atualizado com sucesso!</h4>
    <br>
    <p><a href="listar-produtos.php" role="button" class="btn btn-primary">Atualizar novo produto</a></p>
</div>