<?php

include('conexao.php');
include('password.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];
$status = "Ativo";

$sql = "INSERT INTO usuarios (nome, email, senha, nivel, status) VALUES ('$nome', '$email', sha1('$senha'), '$nivel', '$status')";

$inserir = mysqli_query($conexao, $sql);

?>

<!-- Texto a ser exibido após e inserção dos dados -->

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<div class="container principal">
    <h4>Usuário adicionado com sucesso!</h4>
    <br>
    <p><a href="adicionar-usuario.php" role="button" class="btn btn-primary">Cadastrar novo usuário</a></p>
</div>