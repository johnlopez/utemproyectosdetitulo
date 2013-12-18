<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>

	<h1>Registrar Usuarios</h1>
	<?php if(isset($mensaje)):?>
	<h2><?= $mensaje ;?></h2>
	<?php endif;?>

	<form name="form_reg" action="<?= base_url().'registro_usuarios/registro_very'?>" method="POST">
		<label for="usuario">Usuario</label>
		<input type="text" name="user" value="<?= @set_value('user')?>" /><br />

		<label for="contraseña">Contraseña</label>
		<input type="password" name="pass" value="<?= @set_value('pass')?>"/><br />

		<label for="contraseña">Confirmar Contraseña</label>
		<input type="password" name="pass2" value="<?= @set_value('pass2')?>"/><br />


		<input type="submit" value="Registrar" name="submit_reg" />

	</form>
	<hr />
	<?= validation_errors(); ?>


	<h1> Links</h1>
	<a href="<?= base_url().'registro_usuarios/'?>">Registrar Nuevo Usuario</a><br />
	<a href="<?= base_url().'login/'?>">Iniciar Sesion</a><br />
	<a href="<?= base_url()?>">Home</a><br />

</body>
</html>