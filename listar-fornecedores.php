<!DOCTYPE html>
<html lang="pt-br">

<?php include 'permissionamento.php'; ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <title>Listagem de fornecedores</title>
</head>

<body>
    <div class="container principal">
        <h3>Lista de fornecedores</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome da fornecedor</th>

                    <!-- exibe para 1 e 2 -->
                    <?php if (($nivel == 1) || ($nivel == 2)) { ?>

                        <th scope="col">Ação</th>

                        <!-- fecha php -->
                    <?php } ?>

                </tr>
            </thead>

            <?php include "conexao.php";

            $sql = "SELECT * FROM `fornecedor`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_fornecedor = $array["id_fornecedor"];
                $nome_fornecedor = $array["nome_fornecedor"];
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $nome_fornecedor; ?></td>
                        <td>
                            <!-- exibe para 1 e 2 -->
                            <?php if (($nivel == 1) || ($nivel == 2)) { ?>

                                <a href="editar-fornecedor.php?id=<?php echo $id_fornecedor; ?>" class="btn btn-sm btn-warning" role="button"><i class="fas fa-edit"></i></a>

                                <!-- fecha php -->
                            <?php } ?>

                            <!-- exibe apenas para 1 -->
                            <?php if ($nivel == 1) { ?>

                                <a href="excluir-fornecedor.php?id=<?php echo $id_fornecedor; ?>" class="btn btn-sm btn-danger" role="button"><i class="fas fa-trash-alt"></i></a>

                                <!-- fecha php -->
                            <?php } ?>

                        </td>

                    <?php } ?>
                    <!-- fechamento do while -->
                    </tr>
                </tbody>
        </table>

        <div class="form-botao">
            <a href="index.php" type="submit" class="btn btn-primary">Voltar</a>
        </div>
    </div>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>