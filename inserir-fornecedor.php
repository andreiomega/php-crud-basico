<?php

include('conexao.php');
$fornecedor = $_POST['fornecedor'];
$sql = "INSERT INTO fornecedor (nome_fornecedor) values ('$fornecedor')";
$inserir = mysqli_query($conexao, $sql);
?>

<!-- Texto a ser exibido após a inserção dos dados -->

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<div class="container principal">
    <h4>Fornecedor adicionado com sucesso!</h4>
    <br>
    <p><a href="adicionar-fornecedor.php" role="button" class="btn btn-primary">Adicionar novo fornecedor</a></p>
</div>