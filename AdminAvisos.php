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
	<link rel="stylesheet" href="css/avisos.css">
 	

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

			<div class="cajaLogin">
				<div class="titulo">Datos Personales</div>
				<div class="caja">
				<div class="contenedor">
				<form class="formulario" id="formulario" method="POST" name="formulario">

					<?php

						$fechaActual = date('Y-m-d');
					?>

					<div class="subtitulo">Fecha:</div>
					<div class="formulario" id="inputFecha">
						<input class = "entrada" autocomplete="off" type="date" name="fecha"  min="<?php echo $fechaActual ?>" max="2050-12-31" placeholder="Ingrese la fecha">
						<p class="errorInput" id="errorInput">Correo no valido</p>
					</div>

					<div class="subtitulo">Mensaje:</div>

						<textarea name="mensaje" id="mensaje" class="descripcion" placeholer="Escriba aqui la Publicacion"> </textarea>
			
						
                			

					<div class="error2" id="error2">
						<p>Todos los campos son obligatorios</p>
					
					</div>
					
					<div class="botones">	
						<button type="submit" class="botonAceptar" name ="registrar">Subir</button>	
					</div>
				</form>
				</div> 
				</div>
			</div>

		</div>

		<?php

				$consulta2 = "SELECT * FROM avisos";

				$resultado2 = mysqli_query($conexion, $consulta2);
				while($mostrar2 = mysqli_fetch_array($resultado2)){

		?>


			<div class="cuerpo">
		<div class="cajaLogin">
				<div class="titulo">Aviso</div>
				<div class="caja">
					<div class="contenedor">
						<div class="subtitulo">Fecha: <?php echo $mostrar2['fecha'] ?></div>

						<div class="subtitulo">Mensaje:</div>

						<div class="subtitulo2"><?php echo $mostrar2['mensaje'] ?></div>
					
					

					</div> 
				</div>
			</div>
		</div>
		<?php
				}
			?>
	</section>

	<script src="js/avisos.js"></script>

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