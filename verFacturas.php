<?php
include("php/conexion.php");
session_start();
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
    
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/reporte.css">
 	

</head>
<body >
	<header class="cabecera">
    		<nav class="barraSuperior">
           		<div class="logo">
              			<img class="logoUmss" src="imagenes/logoU.png" alt="logo" height="100" width="100"/>
             			<div class="texLogo">UMSS</div>
          		</div>
			
			<div class="logo">
              			<img class="logoFcyt" src="imagenes/logoF.png" alt="logo" height="100" width="100"/>
             			<div class="texLogo">FCyT</div>
          		</div>	
        	</nav>
	</header>

	<section class="pagina">
		<div class="cuerpo">
			<div class="boton2">
					<button class="botonCerrar" name ="botonCerrar" onclick="location.href='index.html'">Cerrar Sesión</button>
			</div>

			<div class="titulo">Reportes de moras</div>
			<div class="contenedor">
				
			<table id="tablaTecnica">
				<tr>
					<th>C.I.</th>
					<th>C./mes (Bs.)</th>
					<th>Meses</th>
					<th>Monto(Bs.)</th>
				</tr>

				<?php
					$ci = $_SESSION['ci'];
					$sql="SELECT * FROM reporte WHERE ci=$ci";
					$result=mysqli_query($conexion,$sql);
					while($mostrar=mysqli_fetch_array($result)){
				?>
						<tr>
							<td><?php echo $mostrar['ci']?></td>
							<td><?php echo $mostrar['costo']?></td>
							<td><?php echo $mostrar['meses']?></td>
							<td><?php echo $mostrar['deuda']?></td>

						</tr>
				<?php
					}
				?>

			</table>





				<div class="boton">
					<button class="botonAceptar1" name ="botonAceptar1" onclick="location.href='inicio.html'">Volver</button>
				</div>
			</div> 
		</div>
	</section>

	<footer>
		<p1>Contactanos</p1>
		<div class="contenidoFooter">
			<p> Celular: 73770458</p>
			<p> E-mail: planetsoft166@gmail.com</p>
			<p> Dirección: Av. America y Calle Rosales N°1556</p>
		</div>
	</footer>
	
</body> 

</html>