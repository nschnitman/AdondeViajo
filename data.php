<? session_start();

//Delimitadores de nombres,descripciones y conexciones de toda la plataforma
// <? include('data.php'); ? > 
// insertar: <?= %la variable% ;? >

//include_once 'include/analyticstracking.php';

//Descripcion
$tinynombre = "Adonde Viajo";
$longnombre = "Adonde Viajo";
$longdesc = " Descubri lo imposible!" ;

//Contacto
$telefono = "";
$mail = "info@adondeviajo.com.ar";

//Redes Sociales
$facebook = "https://www.facebook.com/adondeviajo.arg";
$instagram = "https://www.instagram.com/adondeviajo/";

//Portafolio de Viajes
$portfull = "portfolio-full.php?ID=";
$portsimple = "portfolio.php?ID=";


//Conexcion Base de Datos
$host = "";
$userconect = "";
$clave = "";
$basedatos = "";
$conexion = mysql_connect($host, $userconect, $clave) or die("Problemas al conectar con el servidor");
mysql_select_db($basedatos, $conexion) or die("Problemas en la seleccion de la base de datos");
?>
