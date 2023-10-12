<?php

include("config.php");

$id = $_POST['id'];
$codigo_produto = $_POST['codigo_produto'];
$nome_produto = $_POST['nome_produto'];
$quantidade = $_POST['quantidade'];

$sql_code = "UPDATE produtos SET codigo_produto = '{$codigo_produto}', nome_produto = '{$nome_produto}', quantidade = {$quantidade} WHERE id = '$id'";

$con->query($sql_code);

header("Location: ../html/home.php");

?>