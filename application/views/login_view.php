<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>

	<h1>Iniciar Sesion</h1>
	<form>
		<label for="Usuario">Usuario</label>
		<input type="text" name="user"/><br />

		<label for="contraseña">Contraseña</label>
		<input type="password" name="pass"/><br />

		<input type="submit" value="Entrar" name="submit" />

	</form>

	<h1> Links</h1>
	<a href="<?= base_url().'registro_usuarios/'?>">Registrar Nuevo Usuario</a><br />
	<a href="<?= base_url().'login/'?>">Iniciar Sesion</a><br />
	<a href="<?= base_url()?>">Home</a><br />

</body>
</html>