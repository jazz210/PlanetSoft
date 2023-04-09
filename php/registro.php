<?php 

include("conexion.php");

$nombre = $_POST['nombre'];
$ci = $_POST['ci'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$contrasenia = $_POST['contrasenia'];

$sql = "SELECT email
	     FROM usuario
	     WHERE email = '$email'";

$respuesta = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($respuesta);

if(!$fila){
	$consulta = "INSERT INTO usuario VALUES ('$nombre' , '$ci' , '$celular','$email' ,'$contrasenia')";

		if(mysqli_query($conexion, $consulta)){
				echo json_encode('correcto');
			
		}else {
			echo json_encode('error');
		}
		
}else{
	echo json_encode('existe');
}

mysqli_close($conexion);
