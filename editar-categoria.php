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
    <title>Formulário de edição de categoria</title>
</head>

<body>
    <div class="container principal">
        <h4>Formulário de edição de categoria</h4>
        <form action="atualizar-categoria.php" method="post">

            <?php
            $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_categoria = $array["id_categoria"];
                $nome_categoria = $array["nome_categoria"];
            ?>

                <div class="form-group">
                    <input type="number" class="form-control" id="numero-categoria" name="id" value="<?php echo $id; ?>" />
                </div>

                <div class="form-group">
                    <label for="nome-categoria">Nome do categoria</label>
                    <input type="text" class="form-control" id="nome-categoria" name="nome-categoria" value="<?php echo $nome_categoria; ?>" />
                </div>

                <div class="form-botao">
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