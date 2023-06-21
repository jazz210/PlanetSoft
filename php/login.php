<?php 

include("conexion.php");

session_start();
$_SESSION['login'] = false;

$usuario = $_POST['usuario'];
$pass = $_POST['contrasenia'];


$consulta = "SELECT *
			FROM usuario
			WHERE email = '$usuario'";

$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_array($resultado);


$consulta2 = "SELECT *
			FROM administrador
			WHERE email = '$usuario'";

$resultado2 = mysqli_query($conexion, $consulta2);
$filas2 = mysqli_fetch_array($resultado2);


if($filas){	
	if($pass == $filas['contrasenia']){
		$_SESSION['login']	= true;			
		$_SESSION['ci']	= $filas['ci'];
		echo json_encode('usuario');
	}else{	
		echo json_encode('error');
	}
}else if($filas2){
		if($pass == $filas2['contrasenia']){
		echo json_encode('admin');
	}else{	
		echo json_encode('error');
	}

}else{	
		echo json_encode('error');
}
		

mysqli_free_result($resultado);
mysqli_close($conexion);