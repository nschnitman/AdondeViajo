<?php

	//Datos de la base de datos
		//echo $conexion;
	//Datos del form
	$usuario = 	$_SESSION['XID'];
	$portfolio = $_SESSION['XPORTFOLIO'];
	$fecha = date("Y-m-d H:i:s");


	// Se chequea que este habilitado para inscribirse
	$precheck2 = "select P.clicks,PA.cantclick  
		from  portfolio as P
		inner join cliente as C on C.id = P.clienteID
		inner join planes as PA on PA.id = C.planid
		where P.id =".$portfolio;
	$check2 = mysqli_query( $conexion, $precheck2) or die();
	$resultado2 = mysqli_fetch_row($check2);
	
	// Se chequea que no se haya anotado previamente
	$precheck = "select postID from  postulaciones where usuarioID = ".$usuario." and portfolioID = ".$portfolio;
	$check = mysqli_query( $conexion, $precheck) or die();
	$resultado = mysqli_fetch_row($check);
	if($resultado2[0]<$resultado2[1]){
		if($resultado[0]==""){
		// Sólo se requieren para los campos obligatorios del registro que no estén vacío
			if( isset($portfolio) && !empty($portfolio) &&
				isset($usuario) && !empty($usuario))
			{
				// Se establece la conexión
				// Se hace el update de los click de la postulacion
				$queryup = "UPDATE portfolio SET clicks = (clicks + 1) where id='$portfolio'";
				mysqli_query($conexion, $queryup) or die();
				// Se inserta el nuevo registro en nuestra base de datos
				$query = "INSERT INTO postulaciones ( usuarioID, portfolioID, fecha) values ( '$usuario', '$portfolio',  '$fecha')";
				mysqli_query($conexion, $query) or die();
				// Se vuelve a la página principal
				//header('location: portfolio-full.php?ID=$portfolio&status=OK'); 
				//echo '{ "alert": "success", "message": "Tu usuario ha sido creado correctamente." }';
				echo "Felicitaciones! Estas anotado!";
				mysqli_close($conexion);
			} else
			{
				// En caso de no conectarse, se reiniciará la misma página con un error
				//echo '{ "alert": "error", "message": "Problemas al insertar datos. Por favor contacte al administrador." }';
				echo "Problemas al insertar datos.";
				//header('location: portfolio-full.php?ID=$portfolio&status=OK'); 
				exit;
			}
		}else{
			echo "Ya estas anotado!";
		}
	}else{
		echo "El cupo esta lleno!";		
	}
?>