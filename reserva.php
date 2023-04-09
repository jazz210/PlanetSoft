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
				<div class="contenedor">

					<div class="entrada">
						<div class="subtitulo">CI:</div>
						<div class="formulario" id="inputCi">
							<input class = "entrada" autocomplete="off" type="text" name="ci" placeholder="Ingrese su carnet">
						</div>
					</div>
					
					<div class="entrada">
						<div class="subtitulo">Nombre Completo:</div>
						<div class="formulario" id="inputNombre">
							<input class = "entrada" autocomplete="off" type="text" name="nombre" placeholder="Ingrese su nombre completo">
						</div>
					</div>

					<ul id="nombre"></ul>

					<div class="entrada">
					
						<div class="formulario" id="inputsolicitud">
                					<textarea name="mensaje" id="mensaje" class="descripcion" placeholer="Escriba su consulta."></textarea>
			
						</div>
					</div>

					
					
					<div class="botones">	
						<button class="botonAceptar" name ="botonAceptar" onclick="location.href=''">Solicitar</button>	
						<button class="botonDenegar" name ="botonDenegar" onclick="location.href='reservar.html'">Salir</button>
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