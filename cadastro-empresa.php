<?php
$c=$_POST["cnpj"];
$n=$_POST["nome"];
$e=$_POST["email"];
$p=$_POST["senha"];
$t=$_POST["telefone"];

$conexao=mysqli_connect("localhost","root","", "bm", "3306", "") or die("erro ao conectar ao mysql");
$banco=mysqli_select_db($conexao, "bm") or die("erro de conex&atildeo ao banco de dados");
// mysqli_query($conexao, $i) or die ("erro na inser&ccedil&atildeo de dados na linha ");
mysqli_query($conexao, "INSERT INTO empresa (cnpj, nome, email, senha, telefone) VALUES ($c, '$n', '$e', '$p', $t)");
mysqli_set_charset($conexao, "utf-8");

    //Fecha conexao
mysqli_close($conexao);
echo $c, $n, $e, $t;
?> 