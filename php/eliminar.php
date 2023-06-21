<?php 

include("conexion.php");

session_start();

$ci = $_POST['id'];

$consulta = "DELETE FROM usuario WHERE email='$ci'";

if(mysqli_query($conexion, $consulta)){
	echo json_encode('correcto');
			
}else {
	echo json_encode('error');
}

mysqli_close($conexion);