<?php
ob_start();
$con=mysqli_connect("localhost","id17997524_admin","P-TlJS{5p*18WvVf","id17997524_login");

	//Mirar la conexión
	if(mysqli_connect_errno()){
		echo "1: Error en la conexion";
		exit();
	}
	//Variable que pone el usuario
	$username = $_POST["usuario"];
	$password = $_POST["contraseña"];
	$primerNombre = $_POST["primerNombre"];
	$segundoNombre = $_POST["segundoNombre"];
	$primerApellido = $_POST["primerApellido"];
	$segundoApellido = $_POST["segundoApellido"];


	//Corroborar si el nombre existe(Unique)
	$namecheckquery = "SELECT usuario FROM Jugadores WHERE usuario='" . $username . "';";
	$namecheck = mysqli_query($con, $namecheckquery) or die("2: Error en la consulta ");

	if(mysqli_num_rows($namecheck) > 0){
		echo "3: Ese nombre ya esta en existencia";
		exit();
	}

	//Añadir Usuario a la tabla
	$insertuserquery =  "INSERT INTO Jugadores (usuario, contraseña, primerNombre, segundoNombre, primerApellido, segundoApellido) VALUES ('" . $username . "','" . $password . "','" . $primerNombre . "','" . $segundoNombre . "','" . $primerApellido . "','" . $segundoApellido .  "');"; 
	mysqli_query($con ,$insertuserquery) or die ("4: Fallo al insertar");
	header("location:index.php");
    echo "0";
?>