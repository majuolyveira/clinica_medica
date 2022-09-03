<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../img/icone.ico">
        <title>Clínica Médica</title>
        <script>
            function loginOK() {
                setTimeout("window.location='../funcionario/pag_ini_funcionario.php'", 3000);
            }
            function loginERROR() {
                setTimeout("window.location='login_funcionario.php'", 3000);
            }
        </script>
    </head>
    <body>
        <center>
            <img src="../img/carregando.gif">
        </center>
        <?php
            include '../conexao.php';
            
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
            $sql = mysql_query("SELECT * FROM funcionario WHERE email='$email' AND senha='$senha'");
            
            $row = mysql_num_rows($sql);
            if($row){
                echo '<script>loginOK()</script>';
            }else{
                echo '<script>loginERROR()</script>';
            }
        ?>
    </body>
</html>