<?php

session_start();
$nome_usuario = $_SESSION['nome'];

if (!isset($_SESSION['nome'])) {
	header('Location: index.php');
}

include 'conexao.php';

$sql = "SELECT nivel FROM usuarios WHERE email = '$nome_usuario' AND status = 'Ativo' ";

$buscar = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel'];
