<?php
require_once "./class/Usuario.class.php";
$user = new Usuario();
session_start();
if($_SESSION["logado"] == "sim"){
    $user->usuarioLogado($_SESSION['user']);
}else{
	header("location: /index.php");
}

if(isset($_GET['sair']) == "sim"){
	$user->logoutUsuario();
}
?>

<h1>Logado <?php echo $_SESSION['nome'];?></h1>
<a href="?sair=sim"><span class="glyphicon glyphicon-log-out"></span>Sair</a>
