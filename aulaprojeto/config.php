<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword='';
$dbName = 'formulario';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/* verificar se a conexão está funcionando
if($conexao->connect_errno)
{
    echo "erro";
}
else
{
    echo "Conexão efetuada com sucesso.";
} */


?>