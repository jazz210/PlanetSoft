<?php 

include("conexion.php");


$fecha = $_POST['fecha'];
$mensaje = $_POST['mensaje'];


$consulta = "INSERT INTO avisos (fecha,mensaje)  VALUES ('$fecha' , '$mensaje')";


		if(mysqli_query($conexion, $consulta)){
				echo json_encode('correcto');
			
		}else {
			echo json_encode('error');
		}
		


mysqli_close($conexion);
