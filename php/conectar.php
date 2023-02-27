<?php
$ip = 'localhost';
$usuario = 'root';
$senha = 'root';
$bd = 'musisom.sql';
//comando para conectar com BD mysql
$conexao = mysqli_connect("$ip", "$usuario", "$senha", "$bd");

mysqli_query($conexao, "set NAMES utf8;");
//testar se a conexão foi efetuada com sucesso
/*if (!$conexao) {s
    die("Status: Falha de conexão com MySQL: ");
}
echo "Status: Conectado com sucesso ao Banco de Dados: ".$bd;*/
?>