<?php
// Connection to database
$host = "179.43.121.176";
$userconect = "jjb_db"; //cayynG9XqbJRdBcX
$clave = "Nicolas23"; //8TDPJY2CEYfZ4UuS
$basedatos = "nico7_testeo";


  $connection=mysql_connect($host,$userconect,$clave,"nico7_testeo");
// Check connection



// Increasing the current value with 1
	$query = "UPDATE nico7_testeo.test SET incremento = (incremento + 1) WHERE id='1'";
	
	$query2 = "select incremento from nico7_testeo.test where id='1'";
	
  mysql_query($query,$connection) or die(mysql_error());

 $rta = mysql_query($query2,$connection) or die(mysql_error());
 $ver = mysql_fetch_row($rta);
  mysql_close($connection);
  echo ($ver[0]);
  echo 'OK';   ?>