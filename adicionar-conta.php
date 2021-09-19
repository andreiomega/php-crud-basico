<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Formulário de cadastro</title>
    <style>
        .esconde {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container principal login">
        <h4>Crie nova conta</h4>
        <form action="inserir-conta.php" method="post">
            <div class="form-group">
                <label for="usuario">Nome de usuário</label>
                <input type="text" name="nome" id="usuario" class="form-control" placeholder="Escreva seu nome completo" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Escreva seu e-mail" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Escreva sua senha" required>
            </div>
            <div class="form-group">
                <label for="confirma-senha">Repita sua senha</label>
                <input type="password" name="confirma-senha" id="confirma-senha" class="form-control" placeholder="Confirme sua senha" required oninput="validaSenha(this)">
            </div>
            <div class="form-botao">
                <a href="index.php" type="submit" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-success">
                    Cadastrar
                </button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/functions.js"></script>
</body>

</html>