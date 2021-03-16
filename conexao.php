<?php
/*
define('host','127.0.0.1');
define('usuario', 'root');
define('senha', '');
define('db','trabalho');
*/
$hostname = "127.0.0.1";
$usuario = "root";
$senha = "";
$db = "trabalho";

$conexao = mysqli_connect($hostname, $usuario, $senha, $db) or die('Não foi possível conectar ao banco de dados');

?>