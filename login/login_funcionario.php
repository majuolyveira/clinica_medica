<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../img/icone.ico">
        <title>Clínica Odontológica | Login do Funcionário</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/login.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <form class="form-signin" action="recebe_login_funcionario.php" method="post">
            <img class="mb-4" src="../img/login_atendente.png" alt="" width="200" height="200">
            <h1 class="h3 mb-3 font-weight-normal">Atendente</h1>
            <label for="inputEmail" class="sr-only">Endereço de Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de Email..." name="email" required autofocus>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha..." name="senha" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
            <div class="mt-3 mb-3">
                <a href="../pagina_inicial.php" style="text-decoration: none;">Voltar</a>
            </div>
            <p class="mt-3 mb-3 text-muted">&copy; JG e Ítalo</p>
        </form>
    </body>
</html>
