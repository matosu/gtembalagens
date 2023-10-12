<?php
session_start();
include('../php/config.php');

if (!isset($_SESSION['logado'])) {
	header('Location: index.php');
}

$sql_code = "SELECT * FROM produtos ORDER BY id";
$sql_query = mysqli_query($con, $sql_code);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="5">
		<thead>
			<tr>
				<td>Código do produto</td>
				<td>Nome do produto</td>
				<td>Quantidade</td>
				<td>Ações</td>
			</tr>
		</thead>
		<tbody>
			<?php

			while ($produto = mysqli_fetch_assoc($sql_query)) {
				echo "<tr>";
				echo "<td>{$produto['codigo_produto']}</td>";
				echo "<td>{$produto['nome_produto']}</td>";
				echo "<td>{$produto['quantidade']}</td>";
				echo "<td><a href='edit.php?id={$produto['id']}'>Editar</a><a href='../php/delete.php?id={$produto['id']}'>Deletar</a></td>";
				echo "</tr>";
			}

			?>
		</tbody>
	</table>
	<a href="../php/logout.php">Deslogar</a>
</body>
</html>