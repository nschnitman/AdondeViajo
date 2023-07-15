<<<<<<< HEAD
<? session_start();

//Delimitadores de nombres,descripciones y conexciones de toda la plataforma
// <? include('data.php'); ? > 
// insertar: <?= %la variable% ;? >


//Descripcion
$tinynombre = "Adonde Viajo";
$longnombre = "Adonde Viajo";
$longdesc = " Descubri lo imposible!" ;

//Contacto
$telefono = "+54911-36912268";
$mail = "info@adondeviajo.com.ar";

//Redes Sociales
$facebook = "https://www.facebook.com/adondeviajo.arg";
$instagram = "https://www.instagram.com/adondeviajo/";

//Portafolio de Viajes
$portfull = "portfolio-full.php?ID=";
$portsimple = "portfolio.php?ID=";


//Conexcion Base de Datos
$host = "179.43.121.176";
$userconect = "jjb_db"; //cayynG9XqbJRdBcX
$clave = "Nicolas23"; //8TDPJY2CEYfZ4UuS
$basedatos = "nico7_testeo";
$conexion = mysql_connect($host, $userconect, $clave) or die("Problemas al conectar con el servidor");
mysql_select_db($basedatos, $conexion) or die("Problemas en la seleccion de la base de datos");
?>

<?php

	//Datos de la base de datos
		//echo $conexion;
=======
<?php
	include('data.php');
>>>>>>> NS-33-merge-github-viejo-nuevo
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
<<<<<<< HEAD
	$check2 = mysql_query($precheck2, $conexion);
	$resultado2 = mysql_fetch_row($check2);
	
	// Se chequea que no se haya anotado previamente
	$precheck = "select postID from  postulaciones where usuarioID = ".$usuario." and portfolioID = ".$portfolio;
	$check = mysql_query($precheck, $conexion);
	$resultado = mysql_fetch_row($check);
=======
	$check2 = mysqli_query($conexion, $precheck2) or die();
	$resultado2 = mysqli_fetch_row($check2);
	
	// Se chequea que no se haya anotado previamente
	if($usuario == ""){ $usuario = 0; }
	$precheck = "select postID from  postulaciones where usuarioID = ".$usuario." and portfolioID = ".$portfolio;
	$check = mysqli_query( $conexion, $precheck) or die();
	$resultado = mysqli_fetch_row($check);
>>>>>>> NS-33-merge-github-viejo-nuevo
	if($resultado2[0]<$resultado2[1]){
		if($resultado[0]==""){
		// Sólo se requieren para los campos obligatorios del registro que no estén vacío
			if( isset($portfolio) && !empty($portfolio) &&
				isset($usuario) && !empty($usuario))
			{
				// Se establece la conexión
				// Se hace el update de los click de la postulacion
				$queryup = "UPDATE portfolio SET clicks = (clicks + 1) where id='$portfolio'";
<<<<<<< HEAD
				mysql_query($queryup, $conexion);
				// Se inserta el nuevo registro en nuestra base de datos
				$query = "INSERT INTO postulaciones ( usuarioID, portfolioID, fecha) values ( '$usuario', '$portfolio',  '$fecha')";
				mysql_query($query, $conexion);
=======
				mysqli_query($conexion, $queryup) or die();
				// Se inserta el nuevo registro en nuestra base de datos
				$query = "INSERT INTO postulaciones ( usuarioID, portfolioID, fecha) values ( '$usuario', '$portfolio',  '$fecha')";
				mysqli_query($conexion, $query) or die();
>>>>>>> NS-33-merge-github-viejo-nuevo
				// Se vuelve a la página principal
				//header('location: portfolio-full.php?ID=$portfolio&status=OK'); 
				//echo '{ "alert": "success", "message": "Tu usuario ha sido creado correctamente." }';
				echo "Felicitaciones! Estas anotado!";
<<<<<<< HEAD
				mysql_close($conexion);
=======
				mysqli_close($conexion);
>>>>>>> NS-33-merge-github-viejo-nuevo
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