<?php 

include("conexion.php");

session_start();

$carnet = $_POST['id'];

$consulta = "DELETE FROM reporte WHERE ci='$carnet'";

if(mysqli_query($conexion, $consulta)){
	echo json_encode('correcto');
			
}else {
	echo json_encode('error');
}

mysqli_close($conexion);