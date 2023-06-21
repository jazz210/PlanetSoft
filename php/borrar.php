<?php 

include("conexion.php");

session_start();

$placa = $_POST['id'];

$consulta = "DELETE FROM solicitud WHERE placa='$placa'";

if(mysqli_query($conexion, $consulta)){
	echo json_encode('correcto');
			
}else {
	echo json_encode('error');
}

mysqli_close($conexion);