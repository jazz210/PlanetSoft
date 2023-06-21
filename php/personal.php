<?php 

include("conexion.php");

$nombre = $_POST['nombre'];
$horario = $_POST['horario'];
$celular = $_POST['celular'];
$fecha = $_POST['fecha'];


$consulta = "INSERT INTO personal VALUES ('$nombre' , '$horario' , '$celular','$fecha')";


		if(mysqli_query($conexion, $consulta)){
				echo json_encode('correcto');
			
		}else {
			echo json_encode('error');
		}
		


mysqli_close($conexion);
