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
    <title>Formulário de edição de fornecedor</title>
</head>

<body>
    <div class="container principal">
        <h4>Formulário de edição de fornecedor</h4>
        <form action="atualizar-fornecedor.php" method="post">

            <?php
            $sql = "SELECT * FROM `fornecedor` WHERE id_fornecedor = $id";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_fornecedor = $array["id_fornecedor"];
                $nome_fornecedor = $array["nome_fornecedor"];
            ?>

                <div class="form-group">
                    <input type="number" class="form-control" id="numero-fornecedor" name="id" value="<?php echo $id; ?>" />
                </div>

                <div class="form-group">
                    <label for="nome-fornecedor">Nome do fornecedor</label>
                    <input type="text" class="form-control" id="nome-fornecedor" name="nome-fornecedor" value="<?php echo $nome_fornecedor; ?>" />
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