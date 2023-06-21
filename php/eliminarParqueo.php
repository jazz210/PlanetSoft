<?php 

include("conexion.php");

session_start();

$placa = $_POST['id'];


$consulta = "UPDATE parqueo SET libre = 'si', nombre=' ', placa=' ',ci='0' WHERE codigo = $placa";

if(mysqli_query($conexion, $consulta)){
	echo json_encode('correcto');
			
}else {
	echo json_encode($placa);
}

mysqli_close($conexion);