<? session_start();
require 'data.php'; 
$USUARIO=$_POST["login-form-username"];
$CLAVE=$_POST["login-form-password"];
$POST =$_POST["login-post"];
<<<<<<< HEAD
$queUSER = "select * from usuarios where (usuario='$USUARIO' and clave='$CLAVE')";
$resUSER = mysql_query($queUSER, $conexion) or die(mysql_error());
$totUSER = mysql_num_rows($resUSER);
?>
<script language="JavaScript" type = "text/javascript">
<!-- 
<?
if ($totUSER>0){
	$rowUSER = mysql_fetch_assoc($resUSER); 
=======
$CLAVE = md5($CLAVE);
$queUSER = "select * from usuarios where (usuario='$USUARIO' and clave='$CLAVE')";
$resUSER = mysqli_query($conexion, $queUSER) or die();
$totUSER = mysqli_num_rows($resUSER);
?>
<script language="JavaScript" type = "text/javascript">
<?
if ($totUSER>0){
	$rowUSER = mysqli_fetch_assoc($resUSER); 
>>>>>>> NS-33-merge-github-viejo-nuevo
	$_SESSION['XID']       = $rowUSER["id"];
	$_SESSION['XUSUARIO']  = $rowUSER["usuario"];
	$_SESSION['XNOMBRE']   = $rowUSER["nombre"];
	$_SESSION['ADMIN']  = '0';
<<<<<<< HEAD
	if ($_SESSION['XUSUARIO']=='admin'){
=======
	if ($_SESSION['XUSUARIO']=='nico'){
>>>>>>> NS-33-merge-github-viejo-nuevo
		$_SESSION['ADMIN']  = '1';
	} 

	
	if(isset($POST)){
		echo " top.location.href = 'portfolio-full.php?ID=".$POST."';\n";
	}else{
		echo " top.location.href = 'index.php';\n";
	}
}else{ 
    echo " top.location.href = 'login.php?login=error';\n";
} ?>
<<<<<<< HEAD
//--> 
</script>
=======
</script>
>>>>>>> NS-33-merge-github-viejo-nuevo
