<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container principal">
        <h4>Cadastro de fornecedor</h4>
        <form action="inserir-fornecedor.php" method="post">
            <div class="form-group">
                <label for="fornecedor">Fornecedor</label>
                <input type="text" name="fornecedor" id="fornecedor" class="form-control" placeholder="Digite o nome do fornecedor">
            </div>
            <div class="form-botao">
                <a href="index.php" type="submit" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>