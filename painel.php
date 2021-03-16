<?php 
session_start();
include ('verifica_login.php');
?>
<h2><?php echo $_SESSION['nome']; ?>
