<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../img/icone.ico">
        <title>Clínica Odontológica | Cadastro do Médico</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/navbar-top.css" rel="stylesheet">
        <link href="../css/form-validation.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <a class="navbar-brand" href="pag_ini_funcionario.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="cad_medico.php">Cadastro do Odontólogo<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="agendar_consulta.php">Agendar Consultas<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="ver_consultas.php">Ver Consultas<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="pesquisar_consultas.php">Pesquisar Consultas<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <a href="../pagina_inicial.php"><button class="btn btn-outline-light my-2 my-sm-0">Voltar</button></a>
            </div>
        </nav>
        <main role="main" class="container">
            <div class="jumbotron">
                <h1 class="text-center">Cadastro do(a) Odontólogo(a)</h1>
                <center>
                    <img src="../img/cadastro_dentista.png" width="150px">
                </center>
                <hr>
                <div class="row" style="margin-left: 250px">
                    <div class="col-md-8 order-md-1">
                        <form class="needs-validation" action="recebe_cad_medico.php" method="post" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="firstName" placeholder="Nome" value="" required>
                                    <div class="invalid-feedback">
                                        O nome é requerido.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">CRO</label>
                                    <input type="text" name="cro" class="form-control" id="lastName" placeholder="CRO" value="" required>
                                    <div class="invalid-feedback">
                                        O CRO é requerido. 
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username">Especialidade</label>
                                <div class="input-group">
                                    <input type="text" name="especialidade" class="form-control" id="username" placeholder="Especialidade" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        A especialidade é requerida.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                <div class="invalid-feedback">
                                    Insira um email válido.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Senha</label>
                                <input type="password" name="senha" class="form-control" id="address" placeholder="Senha" required>
                                <div class="invalid-feedback">
                                    Insira uma senha válida.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address2">Endereço</label>
                                <input type="text" name="endereco" class="form-control" id="address2" placeholder="Endereço" required>
                                <div class="invalid-feedback">
                                    O endereço é requerido.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address2">Cidade</label>
                                <input type="text" name="cidade" class="form-control" id="address2" placeholder="Cidade" required>
                                <div class="invalid-feedback">
                                    A cidade é requerida.
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">CPF</label>
                                    <input type="text" name="cpf" class="form-control" id="address2" placeholder="CPF" required>
                                    <div class="invalid-feedback">
                                        O CPF é requerido.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">RG</label>
                                    <input type="text" name="rg" class="form-control" id="address2" placeholder="RG" required>
                                    <div class="invalid-feedback">
                                        O RG é requerido.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Contato</label>
                                    <input type="text" name="contato" class="form-control" id="zip" placeholder="Contato" required>
                                    <div class="invalid-feedback">
                                        O contato é requerido.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
</html>
