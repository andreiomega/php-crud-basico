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
    <title>Formulário de edição de produto</title>
</head>

<body>
    <div class="container principal">
        <h4>Formulário de edição de produto</h4>
        <form action="atualizar-produto.php" method="post">

            <?php
            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_estoque = $array["id_estoque"];
                $numero_produto = $array["numero_produto"];
                $nome_produto = $array["nome_produto"];
                $categoria = $array["categoria"];
                $quantidade = $array["quantidade"];
                $fornecedor = $array["fornecedor"];
            ?>

                <div class="form-group">
                    <label for="numero-produto">Número do produto</label>
                    <input type="number" class="form-control" id="numero-produto" name="numero-produto" value="<?php echo $numero_produto; ?>" disabled />
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" id="numero-produto" name="id" value="<?php echo $id; ?>" />
                </div>

                <div class="form-group">
                    <label for="nome-produto">Nome do produto</label>
                    <input type="text" class="form-control" id="nome-produto" name="nome-produto" value="<?php echo $nome_produto; ?>" />
                </div>

                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select class="form-control" id="categoria" name="categoria">
                        <option>Periféricos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" value="<?php echo $quantidade; ?>" />
                </div>

                <div class="form-group">
                    <label for="fornecedor">Fornecedor</label>
                    <select class="form-control" id="fornecedor" name="fornecedor">
                        <option>Fornecedor A</option>
                        <option>Fornecedor B</option>
                        <option>Fornecedor C</option>
                        <option>Fornecedor D</option>
                    </select>
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