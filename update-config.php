<?php
//create a mySQL DB connection to save data recived from the config.php form
include 'data.php';
//get the data from the form
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$clave = $_POST['clave'];
$clave2 = $_POST['clave2'];

function redirecting($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}


//check if the data is not empty
if (
    isset($nombre) && !empty($nombre) &&
    isset($email) && !empty($email) &&
    isset($telefono) && !empty($telefono) &&
    isset($edad) && !empty($edad)
) {
    //check if the passwords match
    if (
        isset($clave) && !empty($clave) &&
        isset($clave2) && !empty($clave2)
    ) {
        if ($clave == $clave2) {
            //encrypt the password
            $clave = md5($clave);
            //update the user data
            $query = "UPDATE usuarios SET nombre = '$nombre', email = '$email', telefono = '$telefono', edad = '$edad', clave = '$clave' WHERE id = '$UserID'";
            mysqli_query($conexion, $query) or die();
            //redirect to the profile page
            redirecting('perfil.php?status=OK');
            exit;
        } else {
            //redirect to the profile page
            redirecting('perfil.php?status=ERROR');
            exit;
        }
    } else {
        $query = "UPDATE usuarios SET nombre = '$nombre', email = '$email', telefono = '$telefono', edad = '$edad' WHERE id = '$UserID'";
        mysqli_query($conexion, $query) or die();
        //redirect to the profile page
        redirecting('perfil.php?status=OK');
        exit;
    }
} else {
    //redirect to the profile page
    redirecting('perfil.php?status=ERROR');
    exit;
}