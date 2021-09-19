<!DOCTYPE html>
<html lang="pt-br">

<?php include 'permissionamento.php'; ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <title>Listagem de categorias</title>
</head>

<body>
    <div class="container principal">
        <h3>Lista de categorias</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome da categoria</th>

                    <!-- exibe para 1 e 2 -->
                    <?php if (($nivel == 1) || ($nivel == 2)) { ?>

                        <th scope="col">Ação</th>

                        <!-- fecha php -->
                    <?php } ?>

                </tr>
            </thead>

            <?php include "conexao.php";

            $sql = "SELECT * FROM `categoria`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_categoria = $array["id_categoria"];
                $nome_categoria = $array["nome_categoria"];
            ?>

                <tbody>
                    <tr>
                        <td><?php echo $nome_categoria; ?></td>
                        <td>
                            <!-- exibe para 1 e 2 -->
                            <?php if (($nivel == 1) || ($nivel == 2)) { ?>

                                <a href="editar-categoria.php?id=<?php echo $id_categoria; ?>" class="btn btn-sm btn-warning" role="button"><i class="fas fa-edit"></i></a>

                                <!-- fecha php -->
                            <?php } ?>

                            <!-- exibe apenas para 1 -->
                            <?php if ($nivel == 1) { ?>

                                <a href="excluir-categoria.php?id=<?php echo $id_categoria; ?>" class="btn btn-sm btn-danger" role="button"><i class="fas fa-trash-alt"></i></a>

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