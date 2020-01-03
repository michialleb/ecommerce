<?php 
$host = "localhost";
$usuario = "SEU USUARIO";
$senha = "SUA SENHA";
$banco = "SEU BANCO";

$dbcon = new MySQLi("$host","$usuario","$senha","$banco");


if($dbcon-> connect_error) {
    Echo "conexao_error";
}/*else}
echo "conexao_ok";
}*/
?>