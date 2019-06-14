<?php
$conexao = mysqli_connect("localhost", "root", "", "bm", "3306", "");
$db = "bm";
mysqli_set_charset($conexao, "utf-8");
mysqli_select_db($conexao, $db);

if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "select * from empresa where email='" . $email . "'AND senha='" . $senha . "'limit 1";

    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) == 1) {
        ?>
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Acesso concluído..</p>
        <button><a href="empresa.html">Entrar</a> </button>
    </div>

</div>
<?php
    exit();

} else {
    echo "Erro ao conectar";
    mysqli_close($conexao);
}
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Level PRO</title>
    <link rel="stylesheet" href="css/cad-empresa.css">
</head>

<body>
    <div class="simple-form">
        <form id="cadastro" name="pessoa" action="#" method="POST">
            <h1>LOGIN</h1>
            
            <div id="fonte">
                <p>Email:</p>
                <input id="button" name="email" type="email" size="25" required>
            </div>

            <div id="fonte">
                <p>Senha:</p>
                <input id="button" name="senha" type="password" size="25" required>
            </div>

            <div>
                <br><input id="but" type="submit" name="login" value="Entrar ">
            </div>
    </div>
    </form>
</body>

</html>