<?php
$c=$_POST["cpf"];
$n=$_POST["nome"];
$e=$_POST["email"];
$s=$_POST["sexo"];
$t=$_POST["telefone"];
$d=$_POST["dia"];
$m=$_POST["mes"];
$a=$_POST["ano"];
// $i="insert into pessoa(cpf, nome, email, sexo, telefone, datanasc) values ('$c', '$n', '$e', '$s', '$t', '$a-$m-$d')";




$conexao=mysqli_connect("localhost","root","", "bm", "3306", "") or die("erro ao conectar ao mysql");
$banco=mysqli_select_db($conexao, "bm") or die("erro de conex&atildeo ao banco de dados");
// mysqli_query($conexao, $i) or die ("erro na inser&ccedil&atildeo de dados na linha ");
mysqli_query($conexao, "INSERT INTO pessoa (cpf, nome, email, sexo, telefone, datanasc) VALUES ($c, '$n', '$e', '$s', '$t', '$a-$m-$d')");
mysqli_set_charset($conexao, "utf-8");

    //Fecha conexao
mysqli_close($conexao);
echo $c, $n, $e, $s, $t, $a-$m-$d;
?> 