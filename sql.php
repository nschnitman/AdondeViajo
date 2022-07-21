<?php
//Connecting to sql db.
//$connect = mysqli_connect("179.43.121.176", "jjb_db", "Nicolas23", "jjb");
require 'manager/connect.php'; 
require 'manager/includes.php';

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
if(isset($_POST['submit'])) then {
$_POST['query'] as $select;
$formula = mysql_query($select, $conexion);
end if
$RTA = mysql_query($formula,$conexion); 
	    

echo $rta[0]
?>