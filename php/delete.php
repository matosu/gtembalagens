<?php

include("config.php");

$id = $_GET['id'];

$sql_code = "DELETE FROM produtos WHERE id = '{$id}'";

$con->query($sql_code);

header("Location: ../html/home.php");

?>