<?php

include('../php/config.php');

if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	$sql_code = "SELECT * FROM produtos WHERE id = $id";
	$result = $con->query($sql_code);

	if (mysqli_num_rows($result) > 0) {
		while ($produto = mysqli_fetch_assoc($result)) {
			$codigo_produto = $produto['codigo_produto'];
			$nome_produto = $produto['nome_produto'];
			$quantidade = $produto['quantidade'];
		}
	} else {
		header("Location: home.php");
	}
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>G&T Embalagens</title>
</head>
<body>
	<form action="../php/edit.php" method="post">
		<label for="codigo_produto">Código do produto</label>
		<input type="text" name="codigo_produto" value="<?php echo $codigo_produto ?>"><br>
		<label for="nome_produto">Nome do produto</label>
		<input type="text" name="nome_produto" value="<?php echo $nome_produto ?>"><br>
		<label for="quantidade">Quantidade</label>
		<input type="number" name="quantidade" value="<?php echo $quantidade ?>"><br>
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="submit" value="Atualizar valores">
	</form>
</body>
</html>