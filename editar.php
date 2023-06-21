<?php
	include("php/conexion.php");
	$usuario = $_GET['usuario'];
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
	<link rel="stylesheet" href="css/editar.css">
 	

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
				<div class="titulo">Editar Usuario</div>
				<div class="contenedor">

				<?php
					$us="SELECT * FROM usuario WHERE ci = '$usuario'";
					$respuesta=mysqli_query($conexion,$us);					
					$ver=mysqli_fetch_array($respuesta);
				?>

				<form class="formulario" id="formulario" method="POST" name="formulario">
					<div class="subtitulo">Nombre y Apellido:</div>
					<div class="formulario" id="inputNombre">
						<input class = "entrada" autocomplete="off" type="text" name="nombre" value="<?php echo $ver['nombreCompleto'] ?>" placeholder="Ingrese su usuario">
						<p class="errorInput" id="errorInput">Solo se permiten letras</p>
					</div>

					<div class="subtitulo">CI:</div>
					<div class="formulario" id="inputCi">
						<input class = "entrada" autocomplete="off" type="text" name="ci" value="<?php echo $ver['ci'] ?>" placeholder="Ingrese su usuario">
						<p class="errorInput" id="errorInput">Numero de carnet no valido</p>
					</div>

					<div class="subtitulo">Celular:</div>
					<div class="formulario" id="inputCelular">
						<input class = "entrada" autocomplete="off" type="text" name="celular" value="<?php echo $ver['celular'] ?>" placeholder="Ingrese su celular">
						<p class="errorInput" id="errorInput">Numero de celular no valido</p>
					</div>
				
					<div class="ocultar">
					<div class="subtitulo">Email:</div>
					<div class="formulario" id="inputEmail">
						<input class = "entrada" autocomplete="off" type="text" name="email" value="<?php echo $ver['email'] ?>"placeholder="Ingrese su correo electronico">
						<p class="errorInput" id="errorInput">Correo no valido</p>
					</div>
					</div>

					<!--
						
                			<div class="subtitulo">Contraseña:</div>
					<div class="formulario" id="inputContrasenia">
                				<input class = "entrada" autocomplete="off" type="password" name="contrasenia" id="contrasenia" placeholder="Ingrese la contraseña">
						<p class="errorInput" id="errorInput">Minimo 8 caracteres y Mayusculas</p>
					</div>

					<div class="subtitulo">Confirmar contraseña:</div>
					<div class="formulario" id="inputContrasenia">
                				<input class = "entrada" autocomplete="off" type="password" name="contrasenia2" id="contrasenia2" placeholder="Repita la contraseña">
					</div>

					
					<div class="mostrarContrasenia">
						<input  type="checkbox" class="botonContrasenia" id="botonContrasenia" onclick="mostrar()">
						<div class="subtitulo2">Mostrar Contraseñas</div>
					</div>

					<script type="text/javascript">
						function mostrar(){
							var shows = document.getElementById('contrasenia')
							var show = document.getElementById('contrasenia2')
							if(shows.type=='password'){
								shows.type='text';
								show.type='text';
							}else{
								shows.type='password';
								show.type='password';
							}
							
						}
					</script>
					
					<div class="error" id="error3">
						<p>Las contraseñas no coinciden</p>
					
					</div>

					-->


					<div class="error" id="error">
						<p>El correo ya esta registrado</p>
					
					</div>

					

					<div class="error2" id="error2">
						<p>Todos los campos son obligatorios</p>
					
					</div>
					
					<div class="botones">	
						<button type="submit" class="botonAceptar" name ="registrar">Actualizar</button>	
						<button class="botonDenegar" name ="botonDenegar" onclick="location.href='administrar.php'">Cancelar</button>
					</div>
				</form>
				</div> 
			</div>

		</div>
	</section>

	<script src="js/editar.js"></script>

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