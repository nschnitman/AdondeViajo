<? session_start();

//Descripcion
$tinynombre = "Short Name";
$longnombre = "Long Name";
$longdesc = "Description" ;

//Contacto
$telefono = "Phone";
$mail = "Email";

//Redes Sociales
$facebook = "Facebook-URL";
$instagram = "Instagram-URL";

//Portafolio de Viajes
$portfull = "portfolio-full.php?ID=";
$portsimple = "portfolio.php?ID=";


//Conexcion Base de Datos
$host = "HOST";
$userconect = "USER";
$clave = "PASSWORD";
$basedatos = "DATABASE";
$conexion = mysqli_connect($host, $userconect, $clave, $basedatos) or die("Problemas al conectar con el servidor");
mysqli_select_db($conexion, $basedatos) or die("Problemas en la seleccion de la base de datos");
?>