<!DOCTYPE html>
<html lang="es">

<head>
      
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">

</head>
<body>
	<form action="validar.php" method="post">
	<p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
	<p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
	<input type="submit" value="Ingresar">
	<li><a href="registrar.php"><b>Registrarse</b></a></li>

	</form>
</body>
</html>