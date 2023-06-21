<?php 

include("conexion.php");

$nombre = $_POST['nombre'];
$ci = $_POST['ci'];
$celular = $_POST['celular'];
$email = $_POST['email'];



$consulta = "UPDATE usuario SET nombreCompleto = '$nombre' , celular='$celular', ci = '$ci'  WHERE email = '$email' " ;


		if(mysqli_query($conexion, $consulta)){
				echo json_encode('correcto');
			
		}else {
			echo json_encode('errror');
		}


mysqli_close($conexion);
