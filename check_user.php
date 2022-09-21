<? session_start();
require 'data.php'; 
$USUARIO=$_POST["login-form-username"];
$CLAVE=$_POST["login-form-password"];
$POST =$_POST["login-post"];
$queUSER = "select * from usuarios where (usuario='$USUARIO' and clave='$CLAVE')";
$resUSER = mysql_query($queUSER, $conexion) or die(mysql_error());
$totUSER = mysql_num_rows($resUSER);
?>
<script language="JavaScript" type = "text/javascript">
<!-- 
<?
if ($totUSER>0){
	$rowUSER = mysql_fetch_assoc($resUSER); 
	$_SESSION['XID']       = $rowUSER["id"];
	$_SESSION['XUSUARIO']  = $rowUSER["usuario"];
	$_SESSION['XNOMBRE']   = $rowUSER["nombre"];
	$_SESSION['ADMIN']  = '0';
	if ($_SESSION['XUSUARIO']=='admin'){
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
//--> 
</script>
