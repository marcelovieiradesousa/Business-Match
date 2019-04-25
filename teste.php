<?php
$host = "localhost";
$database = "bm";
$usuario = "root";
$senha = "";
$n=$_POST["nome"];
$c=$_POST["cpf"];
$e=$_POST["email"];
$s=$_POST["sexo"];
$t=$_POST["telefone"];
$d=$_POST["dia"];
$m=$_POST["mes"];
$a=$_POST["ano"];
$i="insert into pessoa (cpf, nome, email, datanasc, telefone, sexo) values ('$c', $n', '$e', '$a/$m/$d', '$t', '$s')";

$conexao = mysql_connect ($host, $usuario, $senha) or trigger_error(mysql_error(), E_USER_ERROR);
mysql_query($i,$conexao) or die ("erro na inser&ccedil&atildeo de dados");
mysql_select_db($database, $conexao);

mysql_set_charset(ütf8);
?>