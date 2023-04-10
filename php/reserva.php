<?php 

include("conexion.php");

session_start();

$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$placa = $_POST['placa'];
$mensaje = $_POST['mensaje'];

$consulta = "INSERT INTO solicitud VALUES ('$ci' , '$nombre' ,  '$placa' , '$mensaje')";

if(mysqli_query($conexion, $consulta)){
	echo json_encode('correcto');
			
}else {
	echo json_encode('error');
}

mysqli_close($conexion);