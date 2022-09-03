<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../img/icone.ico">
        <title>Clínica Odontológica | Agendar Consultas</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="navbar-top.css" rel="stylesheet">
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
                <h1 class="text-center">Agendar Consultas</h1>
                <center>
                    <img src="../img/agendar_consulta.png" width="125px">
                </center>
                <hr>
                <div class="row" style="margin-left: 250px">
                    <div class="col-md-8 order-md-1">
                        <form class="needs-validation" action="recebe_agendar_consulta.php" method="post" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="firstName" placeholder="Nome" value="" required>
                                    <div class="invalid-feedback">
                                        O nome é requerido.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Idade</label>
                                    <input type="text" name="idade" class="form-control" id="lastName" placeholder="Idade" value="" required>
                                    <div class="invalid-feedback">
                                        A idade é requerida. 
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username">Data de Nascimento</label>
                                <div class="input-group">
                                    <input type="date" name="data_nasc" class="form-control" id="username" placeholder="" required>
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
                                <label for="address">Estado Civil</label>
                                <input type="text" name="est_civil" class="form-control" id="address" placeholder="Estado Civil" required>
                                <div class="invalid-feedback">
                                    O estado civil é requerido.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address2">Sexo</label>
                                <input type="text" name="sexo" class="form-control" id="address2" placeholder="Sexo" required>
                                <div class="invalid-feedback">
                                    O sexo é requerido.
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
                                    <label for="state">Cidade</label>
                                    <input type="text" name="cidade" class="form-control" id="address2" placeholder="Cidade" required>
                                    <div class="invalid-feedback">
                                        A cidade é requerida.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Estado</label>
                                    <input type="text" name="estado" class="form-control" id="zip" placeholder="Estado" required>
                                    <div class="invalid-feedback">
                                        O contato é requerido.
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="address2">Queixa Principal</label>
                                    <textarea class="form-control" style="margin-left: 15px;" name="queixa_principal" cols="63" rows="5">
                                        
                                    </textarea>
                                    <div class="invalid-feedback">
                                        A queixa é requerida.
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
