<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../img/icone.ico">
        <title>Clínica Odontológica | Receita</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="navbar-top.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <a class="navbar-brand" href="pag_ini_medico.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="ver_consultas_m.php">Ver Consultas<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="pesquisar_consultas_m.php">Pesquisar Consultas<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <a href="../pagina_inicial.php"><button class="btn btn-outline-light my-2 my-sm-0">Voltar</button></a>
            </div>
        </nav>
        <main role="main" class="container">
            <div class="jumbotron" style="background-image: url(../img/fundo_receita03.jpg)">
                <h1 class="text-center"></h1>
                <center>
                    <img src="../img/logo_clinica.png" width="300px">
                    <br>
                    <img src="../img/01.png" width="300px">
                </center>
                <hr>
                <table class="table table-borderless">
                    <tr>
                        <th>Odontologista</th>
                        <th>CRO</th>
                    </tr>
                    <tr>
                        <td>Ítalo Rodrigues</td>
                        <td>365892147</td>
                    </tr>
                    <tr>
                        <th>Paciente</th>
                        <th>CPF</th>
                    </tr>
                    <?php
                        include '../conexao.php';
                        $cpf = @$_GET['cpf'];
                        $b = mysql_query("SELECT * FROM consulta WHERE cpf='$cpf'");
                        while($c = mysql_fetch_array($b)){
                            echo '
                                <tr>
                                    <td>'.$c['nome'].'</td>
                                    <td>'.$c['cpf'].'</td>
                                </tr>  
                            ';
                        }
                    ?>
                </table>
                <hr>
                <center>
                    <h4 class="h4">Prescrição Odontológica</h4>
                    <textarea name="prescricao" cols="100" rows="15">
                    
                    </textarea>
                    <br><br>
                    <button class="btn btn-primary" type="submit" onclick="window.print()">Gerar Receita</button>
                </center>
                <hr class="mb-5 mt-5">
                <h5 class="h5">Assinatura:</h5>
            </div>
        </main>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
</html>
