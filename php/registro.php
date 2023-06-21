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
	$consulta2 = "INSERT INTO reporte VALUES ('$ci' , '$nombre' , '0','70' ,'0')";

		if(mysqli_query($conexion, $consulta) && mysqli_query($conexion, $consulta2)){
				echo json_encode('correcto');
			
		}else {
			echo json_encode('error');
		}
		
}else{
	echo json_encode('existe');
}

mysqli_close($conexion);
