<?php 

include("conexion.php");

session_start();

$placa = $_POST['id'];
$espacio = $_POST['numero'];
$bloque = $_POST['blo'];
$nombre = $_POST['no'];
$ci=$_POST['carnet'];


$codigo = $bloque.''.$espacio;

if($espacio<10){
	$codigo = $bloque.'0'.$espacio;
}

$consulta = "UPDATE parqueo SET libre = 'no',ci='$ci' ,nombre='$nombre' ,placa='$placa'  WHERE codigo = $codigo";
$consulta2 = "DELETE FROM solicitud WHERE placa='$placa'";

if(mysqli_query($conexion, $consulta2)){
	echo json_encode('correcto');
			
}else {
	echo json_encode('error');
}

if(mysqli_query($conexion, $consulta)){
	echo json_encode('correcto');
			
}else {
	echo json_encode('error');
}

mysqli_close($conexion);