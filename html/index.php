<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>G&T Embalagens</title>
</head>
<body>
	<h1>Login</h1>
	<?php
	if (isset($_SESSION['falta_info'])) {
		echo "<p>Usuário/Senha não informados!</p>";
	}
	?>
	<form action="../php/login.php" method="post">
		<label for="usuario">Usuário</label>
		<input type="text" name="usuario">
		<label for="senha">Senha</label>
		<input type="password" name="senha">
		<input type="submit" value="Logar">
	</form>
</body>
</html>