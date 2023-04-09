<?php 

include("conexion.php");

session_start();

$usuario = $_POST['usuario'];
$pass = $_POST['contrasenia'];


$consulta = "SELECT *
			FROM usuario
			WHERE email = '$usuario'";

$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_array($resultado);


if($filas){	
	if($pass == $filas['contrasenia']){
		echo json_encode('correcto');
	}else{	
		echo json_encode('error');
	}
}else{	
		echo json_encode('error');
}
		

mysqli_free_result($resultado);
mysqli_close($conexion);