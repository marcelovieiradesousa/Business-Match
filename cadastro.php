<html>
<head>
<title>Cadastro</title>
</head>
<body>
<?php
$n=$_POST["nome"];
$c=$_POST["cpf"]
$e=$_POST["email"];
$s=$_POST["sexo"];
$t=$_POST["telefone"];
$d=$_POST["dia"];
$m=$_POST["mes"];
$a=$_POST["ano"];
$i="insert into pessoa (cpf, nome, email, datanasc, telefone, sexo) values ('$c', $n', '$e', '$a/$m/$d', '$t', '$s')";
$conexao=mysql_connect("localhost","root","") or die
("erro ao conectar ao mysql");
$banco=mysql_select_db("bm",$conexao) or die
("erro de conex&atildeo ao banco de dados");
mysql_query($i,$conexao) or die ("erro na inser&ccedil&atildeo de dados");
?> 
</body>
</html>