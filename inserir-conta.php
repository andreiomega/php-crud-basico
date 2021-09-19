<?php

include('conexao.php');
include('password.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = 3;
$status = "Inativo";

$sql = "INSERT INTO usuarios (nome, email, senha, nivel, status) VALUES ('$nome', '$email', sha1('$senha'), '$nivel', '$status')";

$inserir = mysqli_query($conexao, $sql);

?>

<!-- Texto a ser exibido após e inserção dos dados -->

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<div class="container principal">
    <h4>Conta criada com sucesso!</h4>
    <h5>Aguarde sua aprovação!</h5>
    <br>
    <p><a href="index.php" role="button" class="btn btn-primary">Voltar</a></p>
</div>