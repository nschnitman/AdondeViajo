<?php
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
if(isset($_POST['submit'])) {
    $formula = mysqli_query($conexion, $_POST['query']);
}
$RTA = mysqli_query($conexion, $formula) or die();
echo $RTA[0]
?>