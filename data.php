<? session_start();
<<<<<<< HEAD

//Delimitadores de nombres,descripciones y conexciones de toda la plataforma
// <? include('data.php'); ? > 
// insertar: <?= %la variable% ;? >

//include_once 'include/analyticstracking.php';
=======
include_once 'include/analyticstracking.php';
>>>>>>> NS-33-merge-github-viejo-nuevo

//Descripcion
$tinynombre = "Adonde Viajo";
$longnombre = "Adonde Viajo";
$longdesc = " Descubri lo imposible!" ;

//Contacto
<<<<<<< HEAD
$telefono = "";
=======
$telefono = "+54911-36912268";
>>>>>>> NS-33-merge-github-viejo-nuevo
$mail = "info@adondeviajo.com.ar";

//Redes Sociales
$facebook = "https://www.facebook.com/adondeviajo.arg";
$instagram = "https://www.instagram.com/adondeviajo/";

//Portafolio de Viajes
$portfull = "portfolio-full.php?ID=";
$portsimple = "portfolio.php?ID=";


//Conexcion Base de Datos
<<<<<<< HEAD
$host = "";
$userconect = "";
$clave = "";
$basedatos = "";
$conexion = mysql_connect($host, $userconect, $clave) or die("Problemas al conectar con el servidor");
mysql_select_db($basedatos, $conexion) or die("Problemas en la seleccion de la base de datos");
?>
=======
$host = "localhost";
$userconect = "uvjbhvuftjmpg"; 
$clave = "bbd_523@#u%B"; 
$basedatos = "dbhp7iny03n5hx";
$conexion = mysqli_connect($host, $userconect, $clave, $basedatos) or die("Problemas al conectar con el servidor");
mysqli_select_db($conexion, $basedatos) or die("Problemas en la seleccion de la base de datos");
?>
>>>>>>> NS-33-merge-github-viejo-nuevo
