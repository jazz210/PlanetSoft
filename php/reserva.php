<?php 

include("conexion.php");

session_start();

$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$placa = $_POST['placa'];
$espacio= $_POST['espacio'];
$bloque = $_POST['bloque'];

$consulta = "INSERT INTO solicitud VALUES ('$ci' , '$nombre' ,  '$placa', '$espacio', '$bloque')";

if(mysqli_query($conexion, $consulta)){
	echo json_encode('correcto');
			
}else {
	echo json_encode('error');
}

mysqli_close($conexion);