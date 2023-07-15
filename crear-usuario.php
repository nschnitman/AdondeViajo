<?php
	//Datos de la base de datos
	include 'data.php';
	
	//Datos del form
	$usuario = $_POST['register-form-username'];
	$clave = $_POST['register-form-password'];
	$reclave = $_POST['register-form-repassword'];
	$nombre = $_POST['register-form-name'];
	$email = $_POST['register-form-email'];
	$telefono = $_POST['register-form-phone'];
	$edad = $_POST['register-form-age'];
	$dob2 = $_POST['register-form-dob'];
	$birthDate = explode("/", $dob2);
	$dob = 	$birthDate[2]."-".$birthDate[0]."-".$birthDate[1];


	
	// Sólo se requieren para los campos obligatorios del registro que no estén vacío
	if( isset($nombre) && !empty($nombre) &&
		isset($usuario) && !empty($usuario) &&
		isset($email) && !empty($email) &&
		(isset($clave) && !empty($clave) && ($clave == $reclave) ) )
	{
		// Se establece la conexión
		// Se inserta el nuevo registro en nuestra base de datos
		$clave = md5($clave);
		$query = "INSERT INTO usuarios ( usuario, clave, nombre, email,telefono,edad,fnac) values ( '$usuario', '$clave',  '$nombre','$email','$telefono','$edad','$dob')";
		mysqli_query($conexion, $query) or die();
		// Se vuelve a la página principal
		header('location: login.php?status=OK'); 
		//echo '{ "alert": "success", "message": "Tu usuario ha sido creado correctamente." }';
		//echo "usuario creado correctamente.";
		mysqli_close($conexion);
	} else
	{
		// En caso de no conectarse, se reiniciará la misma página con un error
		//echo '{ "alert": "error", "message": "Problemas al insertar datos. Por favor contacte al administrador." }';
		//echo "problemas al insertar datos.";
		header('location: login.php?status=DIE'); 
		exit;
	}
	
?>