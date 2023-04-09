<?php
$servidor 	= "localhost";
$usuario  	= "root";
$contrasenha	= "";
$BD		= "parqueo";


$conexion = mysqli_connect($servidor, $usuario, $contrasenha, $BD);

if(!$conexion){
	echo "Fallo la conexion <br>";
	die ("connection failed: " . mysqli_connect_error());

}else{
	echo "";
}
?>