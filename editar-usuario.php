<!DOCTYPE html>

<?php
include "conexao.php";
$id = $_GET["id"];
?>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Formulário de edição de usuário</title>
</head>

<body>
    <div class="container principal">
        <h4>Formulário de edição de usuário</h4>
        <form action="atualizar-usuario.php" method="post">

            <?php
            $sql = "SELECT * FROM `usuarios` WHERE id_usuario = $id";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_usuario = $array["id_usuario"];
                $nome_usuario = $array["nome"];
                $email_usuario = $array["email"];
                $nivel_usuario = $array["nivel"];
                $status_usuario = $array["status"];
            ?>

                <div class="form-group">
                    <input type="number" class="form-control" id="id" name="id" value="<?php echo $id; ?>" />
                </div>

                <div class="form-group">
                    <label for="nome-usuario">Nome</label>
                    <input type="text" class="form-control" id="nome-usuario" name="nome-usuario" value="<?php echo $nome_usuario; ?>" />
                </div>

                <div class="form-group">
                    <label for="email-usuario">E-mail</label>
                    <input type="text" class="form-control" id="email-usuario" name="email-usuario" value="<?php echo $email_usuario; ?>" />
                </div>

                <div class="form-group">
                    <label for="nivel">Nível</label>
                    <input type="number" class="form-control" id="nivel" name="nivel" value="<?php echo $nivel_usuario; ?>" min="1" max="3" />
                </div>

                <!-- CRIAR UM SELECT BUSCANDO O NÍVEL DO USUÁRIO E UM SELECT DO BANCO COM ELE SELECIONADO -->

                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="<?php echo $status_usuario; ?>" />
                </div>

                <!-- CRIAR UM SELECT BUSCANDO O STATUS DO USUÁRIO E UM SELECT DO BANCO COM ELE SELECIONADO -->

                <div class="form-botao">
                    <a href="listar-usuarios.php" type="submit" class="btn btn-primary">Voltar</a>
                    <button type="submit" class="btn btn-success">
                        Atualizar
                    </button>
                </div>
            <?php } ?>
            <!-- fechamento do while -->
        </form>
    </div>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>