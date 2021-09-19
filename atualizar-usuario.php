<?php

include "conexao.php";

$id = $_POST["id"];

$nome = $_POST["nome-usuario"];
$email = $_POST["email-usuario"];
$nivel = $_POST["nivel"];
$status = $_POST["status"];

$sql = "UPDATE `usuarios` SET `nome`='$nome', `email`='$email', `nivel`='$nivel', `status`='$status' WHERE id_usuario = $id";

$atualizar = mysqli_query($conexao, $sql);
?>

<!-- Texto a ser exibido após e inserção dos dados -->

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<div class="container principal">
    <h4>Usuário atualizado com sucesso!</h4>
    <br>
    <p><a href="listar-usuarios.php" role="button" class="btn btn-primary">Atualizar novo usuário</a></p>
</div>