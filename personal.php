<?php
	include("php/conexion.php");
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
	<link rel="stylesheet" href="css/personal.css">
 	

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
		
		<?php

				$consulta2 = "SELECT * FROM personal";

				$resultado2 = mysqli_query($conexion, $consulta2);
				while($mostrar2 = mysqli_fetch_array($resultado2)){

		?>


			<div class="cuerpo">
		<div class="cajaLogin">
				<div class="titulo">Datos Personales</div>
				<div class="caja">
					<div class="foto">
						<img class="logoFcyt" src="imagenes/perso.png" alt="logo" height="120" width="120"/>
					</div>
					<div class="contenedor">
						<div class="subtitulo">Nombres: <?php echo $mostrar2['nombre'] ?></div>
					

						<div class="subtitulo">Horario: <?php echo $mostrar2['horario'] ?></div>
					
						<div class="subtitulo">Celular: <?php echo $mostrar2['celular'] ?></div>

						<div class="subtitulo">Fecha: <?php echo $mostrar2['fecha'] ?></div>

					</div> 
				</div>
			</div>
		</div>
		<?php
				}
			?>
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