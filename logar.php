<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="Index.css">
	</head>
<body>
	<form action="verificarlogin.php" method="POST">
		<fieldset>
		 <legend>Login</legend>
			<p><label for="user">Nome de usuario:</label><input type="text" name="user" id="user" required /></p>
			<p><label for="senha">Senha:</label><input type="password" name="senha" id="senha" /></p>
			<p><input type="submit" value="ENVIAR"/></p>
		 </fieldset>
		</form>
	</body>
</html>