<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <title>Listagem de usuários</title>
</head>

<body>
    <div class="container principal">
        <h3>Lista de usuários para aprovação</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php include "conexao.php";

            $sql = "SELECT * FROM `usuarios` WHERE status ='Inativo'";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_usuario = $array["id_usuario"];
                $nome_usuario = $array["nome"];
                $email_usuario = $array["email"];
                $nivel_usuario = $array["nivel"];
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $nome_usuario; ?></td>
                        <td><?php echo $email_usuario; ?></td>
                        <td><?php echo $nivel_usuario; ?></td>

                        <td>
                            <a href="aprovar-usuario.php?id=<?php echo $id_usuario; ?>" class="btn btn-sm btn-success" role="button"><i class="fas fa-check"></i></a>

                            <a href="recusar-usuario.php?id=<?php echo $id_usuario; ?>" class="btn btn-sm btn-danger" role="button"><i class="fas fa-trash-alt"></i></a>
                        </td>

                    <?php } ?>
                    <!-- fechamento do while -->
                    </tr>
                </tbody>
        </table>

        <div class="form-botao">
            <a href="menu.php" type="submit" class="btn btn-primary">Voltar</a>
        </div>
    </div>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>