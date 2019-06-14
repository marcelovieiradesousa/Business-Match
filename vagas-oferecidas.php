<?php
class Config
{
    var $host = 'localhost';
    var $usuario = 'root';
    var $senha = '';
    var $db = 'bm';
}
?>
<?php
class Conecta extends Config
{

    function Conecta()
    {
        mb_internal_encoding("UTF-8"); 
        mb_http_output( "iso-8859-1" );  
        ob_start("mb_output_handler");   
        header("Content-Type: text/html; charset=ISO-8859-1",true);

        $this->link = mysqli_connect($this->host, $this->usuario, $this->senha, $this->db);

        // Checa a conexao
        if (!$this->link) {
            echo "Error: <b>Impossivel conectar ao MySQL. </b><br />" . PHP_EOL; //Unable to connect to MySQL
            echo "Debugging errno: <b>" . mysqli_connect_errno() . "</b><br />" . PHP_EOL;
            echo "Debugging error: <b>" . mysqli_connect_error() . "</b><br />" . PHP_EOL;
            exit;
        }

        echo "Success: Uma conexão correta com o MySQL foi feita! O banco de dados my_db é ótimo.<br />" . PHP_EOL; //A proper connection to MySQL was made! The my_db database is great.
        echo "Host information: <b>" . mysqli_get_host_info($this->link) . "</b>" . PHP_EOL;
    }

    function fecha_sql()
    {
        mysqli_close($conect);
    }
}
?>
<?php


$conexao = mysqli_connect("localhost", "root", "", "bm", "3306", "");
mysqli_set_charset($conexao, "utf-8"); 
$query = "select * from vaga";
$sql = mysqli_query($conexao, $query);

while ($exibe = mysqli_fetch_assoc($sql)) {
    header('Content-type: text/html; charset=utf-8');
    echo  'Código: '. $exibe['cod'] . ' <fieldset border=2> <br>';
    echo  'Nome: '. $exibe['nome'] . '  <br>';
    echo  'Requisitos: '. $exibe['requisitos'] . '  <br>';
    echo  'Remuneração: '. $exibe['dinheiro'] . '  <br>';
    echo  'Descrição: '. $exibe['descricao'] . '  <br>';
    echo  'Código da Área: '. $exibe['cod_area'] . '  <br>';
    echo  'Código do Endereço: '. $exibe['cod_end'] . '</fieldset> <br><br> ';

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Level Pro</title>
</head>
<body>
    
</body>
</html>
<!-- Buscar as vagas oferecidas
!!Somente da empresa do Perfil!!
Ex:
--Vaga--
Nome:
Numero:
Remuneração:
End:
Vagas preenchidas:
[X] Capacitação!
-->