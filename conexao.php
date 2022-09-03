<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "clinica";

$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());

mysql_select_db($db, $conexao) or die (mysql_error());