<?php

include('conexao.php');

$id = $_GET['id'];

$sql = "UPDATE usuarios SET status = 'Ativo' WHERE id_usuario = $id";

$aprovar = mysqli_query($conexao, $sql);

?>

<!-- Texto a ser exibido após e inserção dos dados -->

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<div class="container principal">
    <h4>Usuário aprovado com sucesso!</h4>
    <br>
    <p><a href="listar-usuarios.php" role="button" class="btn btn-primary">Aprovar novo usuário</a></p>
</div>