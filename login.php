<?php
session_start();
include('conexao.php');

if(empty($_POST['nome']) || empty($_POST['senha'])) {
    header('location: index.php');
    exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuario where nome = ('{$nome}') and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);


if($row == 1) {
	$_SESSION['nome'] = $nome;
	header('Location: painel.php');
	exit();
} else {
	header('Location: index.php');
	exit();
}
?>