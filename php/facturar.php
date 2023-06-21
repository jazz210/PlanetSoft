<?php 

include("conexion.php");

session_start();

$mes = $_POST['id'];
$ci = $_POST['c'];
$costo = $_POST['bs'];


$consulta = "UPDATE reporte SET meses = '$mes', costo = '$costo'  WHERE ci = $ci";

if(mysqli_query($conexion, $consulta)){
	echo json_encode('correcto');
			
}else {
	echo json_encode('error');
}

mysqli_close($conexion);