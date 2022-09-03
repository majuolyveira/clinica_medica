<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../img/icone.ico">
        <title>Clínica Odontológica</title>
        <script>
            function consultaOK() {
                setTimeout("window.location='ver_consultas.php'",3000);
                alert("Consulta agendada com sucesso!");
            }
            function consultaERROR() {
                setTimeout("window.location='agendar_consulta.php'",3000);
                alert("Consulta não agendada!");
            }
        </script>
    </head>
    <body>
        <center>
            <img src="../img/carregando.gif">
        </center>
        <?php
            include '../conexao.php';

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];
            $data_nasc = $_POST['data_nasc'];
            $idade = $_POST['idade'];
            $est_civil = $_POST['est_civil'];
            $sexo = $_POST['sexo'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $queixa_principal = $_POST['queixa_principal'];
            
            $sql = mysql_query("INSERT INTO consulta VALUES('','$nome','$email','$cpf','$data_nasc','$idade','$est_civil','$sexo','$cidade','$estado','$queixa_principal')") or die(mysql_error());
            
            if($sql){
                echo '<script>consultaOK()</script>';
            }else{
                echo '<script>consultaERROR()</script>';
            }
        ?>
    </body>
</html>