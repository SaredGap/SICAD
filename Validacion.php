<?php

include('Funciones/Conn.php');

$user = $_POST["txtUser"];
$pass 	= $_POST["txtPass"];


//Para iniciar sesión
if(isset($_POST["btnloginx"]))
{

$queryusuario = mysqli_query($conn,"SELECT * FROM empleados WHERE NoControl = '$user' AND usrPass = '$pass'");
$nr 		= mysqli_num_rows($queryusuario); 
$mostrar	= mysqli_fetch_array($queryusuario); 
	
if (($nr == 1))
	{ 
		
		header("Location: Principal.php");
	}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'index.php' </script>";
	}
}


?>
