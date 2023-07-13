<? session_start();
include_once 'include/analyticstracking.php';

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
$conexion = mysqli_connect($host, $userconect, $clave, $basedatos) or die("Problemas al conectar con el servidor");
mysqli_select_db($conexion, $basedatos) or die("Problemas en la seleccion de la base de datos");
?>