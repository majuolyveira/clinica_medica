<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../img/icone.ico">
        <title>Clínica Odontológica</title>
        <script>
            function cadOK() {
                setTimeout("window.location='pag_ini_funcionario.php'", 3000);
                alert("Cadastro bem sucedido!");
            }
            function cadERROR() {
                setTimeout("window.location='cad_medico.php'", 3000);
                alert("Cadastro mal sucedido!");
            }
        </script>
    </head>
    <body>
        <center>
            <img src="../img/carregando.gif">
        </center>
        <?php
            include '../conexao.php';

            $cro = $_POST['cro'];
            $especialidade = $_POST['especialidade'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $contato = $_POST['contato'];
            $cpf = $_POST['cpf'];
            $rg = $_POST['rg'];
            $endereco = $_POST['endereco'];
            $cidade = $_POST['cidade'];
            
            $sql = mysql_query("INSERT INTO medico VALUES('','$cro','$especialidade','$nome','$email','$senha','$contato','$cpf','$rg','$endereco','$cidade')") or die(mysql_error());
            
            if($sql){
                echo '<script>cadOK()</script>';
            }else{
                echo '<script>cadERROR()</script>';
            }
        ?>
    </body>
</html>