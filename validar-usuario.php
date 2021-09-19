<?php

include 'conexao.php';
include 'password.php';

$nome_usuario = $_POST['nome-usuario'];
$senha_usuario = $_POST['senha-usuario'];

$sql = "SELECT email, senha FROM usuarios WHERE email = '$nome_usuario' AND status = 'Ativo' ";

$buscar = mysqli_query($conexao, $sql);
$total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)) {
    $senha_db = $array['senha'];
    $senha_decodificada = sha1($senha_usuario);

    if ($total > 0) {
        if ($senha_decodificada === $senha_db) {

            session_start();
            $_SESSION['nome'] = $nome_usuario;

            header('Location: menu.php');
        } else {
            header('Location: erro-senha.php');
        }
    }
}

if ($total === 0) {
    header('Location: erro-usuario.php');
}
