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
	<link rel="stylesheet" href="css/reserva.css">
 	

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
				<div class="titulo">Solicitar espacio en parqueo</div>
				<div class="caja">
				<div class="lista">
				<div class="cajaLista">
					<div class="boton">
						<div class="titulo2">Espacios Libres</div>
					</div>


					<table id="tablaTecnica">
						<tr>
							<th>N°</th>
							<th>Bloque</th>
							<th>Elegir</th>
						</tr>

						<?php
							$sql="SELECT * FROM parqueo WHERE libre = 'si'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_array($result)){
						?>
							<tr>
								<td class="fech"><?php echo $mostrar['numero']?></td>
								<td class="fech"><?php echo $mostrar['bloque']?></td>
								<td class="fech"><button class="botonParqueo" name ="botonParqueo" onclick="elegir(<?php echo $mostrar['numero']?> , <?php echo $mostrar['bloque']?>);">Si</button></td>
						<?php
							}
						?>

					</table>

				

				</div>

				<div class="boton">
						<button class="botonParqueo2" name ="botonParqueo2" onclick="location.href='mapa2.php'"><img src="imagenes/parqueo.png" alt="parqueo" height="80" width="80"></button>
					</div>
				</div>
				<div class="contenedor">
					<form class="formulario" id="formulario" method="POST" name="formulario">

					<div class="entrada">
						<div class="subtitulo">CI:</div>
						<div class="formulario" id="inputCi">
							<input class = "entrada" autocomplete="off" type="text" name="ci" placeholder="Ingrese su carnet">
						</div>
					</div>
					
					<div class="entrada">
						<div class="subtitulo">Nombre Completo:</div>
						<div class="formulario" id="inputNombre">
							<input class = "entrada" autocomplete="off" type="text" name="nombre" id="nombre" value="" placeholder="Ingrese su nombre completo"  readonly>
						</div>
					</div>


					<div class="entrada">
						<div class="subtitulo">N° de placa:</div>
						<div class="formulario" id="inputPlaca">
							<input class = "entrada" autocomplete="off" type="text" name="placa" placeholder="Ingrese la placa ">
						</div>
					</div>

					<div class="entrada">
						<div class="subtitulo">Espacio:</div>
						<div class="formulario" id="inputEspacio">
							<input class = "entrada" autocomplete="off" type="text" name="espacio" id="espacio" placeholder="Numero de Espacio " readonly>
						</div>
					</div>

					<div class="entrada">
						<div class="subtitulo">Bloque:</div>
						<div class="formulario" id="inputBloque">
							<input class = "entrada" autocomplete="off" type="text" name="bloque" id="bloque" placeholder="Numero de Bloque" readonly>
						</div>
					</div>


						<div class="error" id="error">
							<p>Carnet de identidad incorrecto</p>
					
						</div>

						<div class="error2" id="error2">
							<p>Todos los campos son obligatorios</p>
					
						</div>
					
					<div class="botones">	
						<button type="submmit" class="botonAceptar">Solicitar</button>	
						<button class="botonDenegar" name ="botonDenegar" onclick="location.href='inicio.html'">Salir</button>
					</div>
					</form>
				</div> 
				</div>
			</div>
		</div>
	</section>

	<script src="js/solicitud.js"></script>

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