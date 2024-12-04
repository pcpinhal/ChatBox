<?php

$usuario  = "root";
$senha    = "";
$servidor = "localhost";
$porta    = "3306";
$database = "chatbox";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database, $porta);

if(!$conexao)
{
    die("<h1 class='erro'>Algo de errado não está certo.</h1><br>" . mysqli_connect_error());
}

?>