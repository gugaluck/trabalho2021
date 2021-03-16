<?php
session_start();


if($row == 1) {
	$_SESSION['nome'] = $nome;
	header('Location: menu.php');
	exit();

} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}/*
if(!$_SESSION['nome']) {
    header('Location: menu.php');
    exit();
}