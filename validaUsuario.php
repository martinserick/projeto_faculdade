<?php
require_once "./class/Usuario.class.php";
$user = new Usuario();
session_start();
if ($_SESSION["logado"] == "sim") {
    $user->usuarioLogado($_SESSION['user']);
} else {
    header("location: /login.php");
}

if (isset($_GET['sair']) == "sim") {
    $user->logoutUsuario();
}
?>

