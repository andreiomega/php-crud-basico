<?php

include "conexao.php";

$id = $_POST["id"];

$nomeFornecedor = $_POST["nome-fornecedor"];

$sql = "UPDATE `fornecedor` SET `nome_fornecedor`='$nomeFornecedor' WHERE id_fornecedor = $id";

$atualizar = mysqli_query($conexao, $sql);
?>

<!-- Texto a ser exibido após e inserção dos dados -->

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<div class="container principal">
    <h4>Fornecedor atualizado com sucesso!</h4>
    <br>
    <p><a href="listar-fornecedores.php" role="button" class="btn btn-primary">Atualizar novo fornecedor</a></p>
</div>