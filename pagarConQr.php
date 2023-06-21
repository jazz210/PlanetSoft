<?php
include("php/conexion.php");
$id = $_GET['ci'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   	<title>Parqueo</title>

   	<!--<link rel="shortcut icon" href="imagenes/logo.ico">-->
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css"/>
   	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
	<link rel="stylesheet" href="css/banco.css">
 	

</head>

<body >

	<section class="pagina">
		<div class="cuerpo">
			<div class="contenedor">
				<div class="titulo">Pagar Deudas</div>

				<?php
					$sql="SELECT * FROM reporte WHERE ci = $id";
					$result=mysqli_query($conexion,$sql);
					$mostrar=mysqli_fetch_array($result);
					$dinero=$mostrar['deuda']." (Bs.)";
				?>
				<div class="titulo2">Nombre Completo:</div>
				<div class="subtitulo"><?php echo $mostrar['nombreCompleto']?></div>
				<div class="titulo2">C.I:</div>
				<div class="subtitulo"><?php echo $mostrar['ci']?></div>
				<div class="titulo2">Monto a pagar:</div>
				<div class="subtitulo"><?php echo $dinero?></div>
				<div class="boton">
					<button class="botonAceptar" name ="botonAceptar" onclick="pagar('<?php echo $id; ?>');">Pagar</button>
				</div>
			</div> 
		</div>
		
	</section>
	<script src ="https://code.jquery.com/jquery-3.6.0.min.js"></script>	
	<script src="js/pagar.js"></script>
	
</body> 

</html>