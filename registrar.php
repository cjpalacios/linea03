<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel = "stylesheet" href="css/login.css">
    <link rel = "stylesheet" href="css/cabecera.css">
</head>
<body>
    <form action="validarreg.php" method="post">
    <h1>Muguiwara S.A</h1>
    <h2>Registro</h2>    
    <p>Primer Nombre <input type="text" placeholder="Julian" name="primerNombre"></p>
    <p>Segundo Nombre <input type="text" placeholder="Camilo" name="segundoNombre"></p>
    <p>Primer Apellido <input type="text" placeholder="Velasco" name="primerApellido"></p>
    <p>Segundo Apelldio <input type="text" placeholder="Martinez" name="segundoApellido"></p>
    <p>Usuario <input type="text" placeholder="Ingrese nombre usuario" name="usuario"></p>
    <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
    <input type="submit" value ="Registrarse">
    </form>
</body>
</html>