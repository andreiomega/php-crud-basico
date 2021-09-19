<?php

include "conexao.php";

$numeroProduto = $_POST["numero-produto"];
$nomeProduto = $_POST["nome-produto"];
$categoria = $_POST["categoria"];
$quantidade = $_POST["quantidade"];
$fornecedor = $_POST["fornecedor"];

$sql = "INSERT INTO `estoque`(`numero_produto`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($numeroProduto,'$nomeProduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);
?>

<!-- Texto a ser exibido após e inserção dos dados -->

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<div class="container">
    <h4>Produto adicionado com sucesso!</h4>
    <br>
    <p><a href="adicionar-produto.php" role="button" class="btn btn-primary">Cadastrar novo item</a></p>
</div>