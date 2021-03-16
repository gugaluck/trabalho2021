<?php
session_start();

if(!$_SESSION['nome']) {
    header('Location: menu.php');
    exit();
}