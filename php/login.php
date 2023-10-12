<?php

session_start();
include('config.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	header("Location: ../html/index.php");
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql_code = "SELECT usuario FROM usuarios WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";
$sql_query = $con->query($sql_code);

if (mysqli_num_rows($sql_query) == 1) {
	$_SESSION['logado'] = true;
	header('Location: ../html/home.php');
} else {
 	header('Location: ../html/index.php');
}

?>