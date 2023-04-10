<?php 

include("conexion.php");

session_start();

$ci = $_POST['ci'];

$consulta = "SELECT *
			FROM usuario
			WHERE ci = '$ci'";

$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_array($resultado);


if($filas){	
	$nombre = $filas['nombreCompleto'];
	echo json_encode($nombre);
}else{	
	echo json_encode('no hay');
}
		

mysqli_free_result($resultado);
mysqli_close($conexion);