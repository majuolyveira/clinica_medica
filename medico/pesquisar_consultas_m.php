<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../img/icone.ico">
        <title>Clínica Odontológica | Pesquisar Consultas</title>
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
        <center>
        <main role="main" class="jumbotron" style="width: 1250px;">
            <div class="container" style="margin-left: 5px">
                <h1 class="text-center">Pesquisar Consultas</h1>
                <center>
                    <img src="../img/pesquisar.png" width="100px">
                </center>
                <form action="pesquisar_consultas_m.php" method="post" class="float-left">
                    <table>
                        <tr>
                            <td><label>Pesquisar por CPF:</label></td>
                            <td><input type="text" name="cpf"></td>
                            <td><button type="submit" class="btn btn-outline-primary">Pesquisar</button></td>
                        </tr>
                    </table>
                </form>
                <br><br>
                <hr>
                <table class="table table-borderless"> 
                    <thead class="thead-dark">
                        <tr>
                            <th>Nº Prontuário</th>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Data de Nascimento</th>
                            <th>Email</th>  
                            <th>Estado Civil</th>
                            <th>Sexo</th>
                            <th>CPF</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Queixa Principal</th>
                            <th>Receita</th>
                            <th>Apagar</th>
                        </tr>
                    </thead>
                    <?php
                        include '../conexao.php';
                        
                        $cpf = @$_POST['cpf'];
                        $sql = mysql_query("SELECT * FROM consulta WHERE cpf='$cpf'");
                        
                        while($a = mysql_fetch_array($sql)){
                            echo'
                            <tr>
                                <td>'.$a['n_prontuario'].'</td>
                                <td>'.$a['nome'].'</td>
                                <td>'.$a['idade'].'</td>
                                <td>'.$a['data_nasc'].'</td>
                                <td>'.$a['email'].'</td>
                                <td>'.$a['estado_civil'].'</td>
                                <td>'.$a['sexo'].'</td>
                                <td>'.$a['cpf'].'</td>
                                <td>'.$a['cidade'].'</td>
                                <td>'.$a['estado'].'</td>
                                <td>'.$a['queixa_principal'].'</td>
                                <td><a href="receita.php?cpf='.$a['cpf'].'"><img src="../img/receita_comprimido.png" width="50px"></a></td>
                                <td><a href="funcao_apagar_consulta.php?cpf='.$a['cpf'].'"><img src="../img/deletar.png" width="50px"></a></td>
                            </tr>';
                        }
                    ?>
                </table>
            </div>
        </main>
        </center>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
</html>
