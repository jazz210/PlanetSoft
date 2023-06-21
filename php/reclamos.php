<?php 

include("conexion.php");



$mensaje = $_POST['mensaje'];

$ruta="";

if($_FILES["archivo"]){
	$nombre_original = basename($_FILES["archivo"]["name"]);
	$nombre_final =date("m-d-y")."-".date("H-i-s")."-".$nombre_original;
	$ruta = "../archivos/".$nombre_final;
	$rutaF = "archivos/".$nombre_final;
	$subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"],$ruta);
}


$consulta = "INSERT INTO reclamo (asunto,archivo)  VALUES ('$mensaje' , '$rutaF')";


		if(mysqli_query($conexion, $consulta)){
				echo json_encode('correcto');
			
		}else {
			echo json_encode('error');
		}
		


mysqli_close($conexion);
