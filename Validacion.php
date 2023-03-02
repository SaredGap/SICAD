<?php
session_start();
include('Funciones/Conn.php');

$user = $_POST["txtUser"];
$pass 	= $_POST["txtPass"];


//Para iniciar sesión
if(isset($_POST["btnloginx"]))
{

$queryusuario = mysqli_query($conn,"SELECT * FROM empleados WHERE NoControl = '$user' AND usrPass = '$pass'");
$nr 		= mysqli_num_rows($queryusuario); 
$row = mysqli_fetch_assoc($queryusuario);
	
if (($nr == 1))
	{ 
		$_SESSION['IDEmpleado']        = $row['IDEmpleado'];
		$_SESSION['NivelMinutario'] = $row['NivelMinutario'];
		$_SESSION['Nombre']  = $row['Nombre'];
		$_SESSION['ApellidoP']  = $row['ApellidoP'];
		header("Location: Principal.php");
	}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'index.php' </script>";
	}
}


?>
