<?php
<<<<<<< HEAD
//Connecting to sql db.
//$connect = mysqli_connect("179.43.121.176", "jjb_db", "Nicolas23", "jjb");
require 'manager/connect.php'; 
require 'manager/includes.php';

=======
require 'manager/connect.php'; 
require 'manager/includes.php';
>>>>>>> NS-33-merge-github-viejo-nuevo
?>


<html>
<body>

<form method="post" action="#">
<input type="textarea" name="query">

</input>
<input type="button" value="submit"></input>

</form>

</body>
</html>


<?
<<<<<<< HEAD
if(isset($_POST['submit'])) then {
$_POST['query'] as $select;
$formula = mysql_query($select, $conexion);
end if
$RTA = mysql_query($formula,$conexion); 
	    

echo $rta[0]
=======
if(isset($_POST['submit'])) {
    $formula = mysqli_query($conexion, $_POST['query']);
}
$RTA = mysqli_query($conexion, $formula) or die();
echo $RTA[0]
>>>>>>> NS-33-merge-github-viejo-nuevo
?>