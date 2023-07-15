<? session_start();
require 'data.php'; 
$USUARIO=$_POST["login-form-username"];
$CLAVE=$_POST["login-form-password"];
$POST =$_POST["login-post"];
$queUSER = "select * from usuarios where (usuario='$USUARIO' and clave=".MD5($CLAVE).")";
$resUSER = mysqli_query($conexion, $queUSER) or die();
$totUSER = mysqli_num_rows($resUSER);
?>
<script language="JavaScript" type = "text/javascript">
<?
if ($totUSER>0){
	$rowUSER = mysqli_fetch_assoc($resUSER); 
	$_SESSION['XID']       = $rowUSER["id"];
	$_SESSION['XUSUARIO']  = $rowUSER["usuario"];
	$_SESSION['XNOMBRE']   = $rowUSER["nombre"];
	$_SESSION['ADMIN']  = '0';
	if ($_SESSION['XUSUARIO']=='nico'){
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
</script>