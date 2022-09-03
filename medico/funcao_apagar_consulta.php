<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Clínica Odontológica</title>
        <script>
            function funDeletar(){
                setTimeout("window.location='pesquisar_consultas_m.php'",2000);
            }
        </script>
    </head>
    <body>
        <center>
            <img src="../img/carregando.gif">
        </center>
        <?php
            include '../conexao.php';
            
            $cpf = @$_GET['cpf'];
            mysql_query("DELETE FROM consulta WHERE cpf='$cpf'");
            
            echo '<script>funDeletar()</script>';
        ?>
    </body>
</html>
