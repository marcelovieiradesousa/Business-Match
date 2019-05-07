<!-- INSERIR LOGIN DE EMPRESA AQUI!! -->
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" href="css/empresa.css">
</head>
<body>
    <div class="simple-form">
    <form id="cadastro" name="pessoa" action="cadastro.php" method="POST">
        <h1>CADASTRO</h1>
    <div id="fonte">
    <p>Nome da Empresa:</p>
    <input id="button" name="nome"type="text" autofocus required>
    </div>

    <div id="fonte"> 
    <p>CNPJ:</p>
    <input  id="button" name="cnpj" type="text" maxlength="11"  size="9" required>
    </div>

    <div id="fonte">
    <p>Email:</p>
    <input id="button" name="email" type="email" size="25"required>
    </div>

    <div id="fonte">
    <p>Telefone:</p>
    <input id="button" name="telefone" type="text" required maxlength="11">
    </div>


    <div id="fonte">
        <p>Endereço</p>
        <input id="button" type="text" name="Endereço">
    </div>


    <div id="fonte">
        <p>CEP</p>
        <input id="cp1" type="text" name="cep"> - <input type="text" name="cep2" id="cp2">
    </div>



    <div id="fonte">
    <p>Data de criação da empresa</p>
    <input id="date" type='text' name='dia' size='1' maxlength='2'>
	<input id="date" type='text' name='mes' size='1' maxlength='2'>
    <input id="date" type='text' name='ano' size='4' maxlength='4'>
    </div>

    <div>
    <!-- <p id="p-senha">Senha:</p>
    <input id="senha" name="senha" type="password"> -->
    <div>
       <br><input id="but" type="submit" name="cadastro" value="Enviar">
        <input id="but" type="reset" name="limpar" value="Limpar">
    </div>
    </div>
    </form>
    </div>
</body>
</html>