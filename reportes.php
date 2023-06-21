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

			<div class="busqueda">

			<div class="cajita">
				<div class="mostrarSemana">
							<input  type="checkbox" class="botonSemana" id="botonSemana" onclick="">
							<div class="subtitulo2">Semanal</div>
				</div>

				<div class="mostrarSemana">
							<input  type="checkbox" class="botonSemana" id="botonMes" onclick="">
							<div class="subtitulo2">Mensual</div>
				</div>
			</div>

			<div class="cajita">
				<div class="subtitulo3">CI:</div>
				<div class="formulario" id="inputContrasenia">
                			<input class = "entrada" autocomplete="off" type="text" name="ci" id="ci" placeholder="Ingrese el CI">
				</div>
				
				<button class="botonGu" name ="botonBuscar" onclick="buscar('<?php echo $ci; ?>');">Buscar</button>
			
			</div>
			</div>

			<div class="contenedor">
				
			<table id="tablaTecnica">
				<tr>
					<th>Nombre</th>
					<th>C.I.</th>
					<th>C./mes (Bs.)</th>
					<th>Meses</th>
					<th>Monto(Bs.)</th>
					<th>Guardar</th>
					<th>Notificar</th>
				</tr>

				<?php
					
					$sql="SELECT * FROM reporte";
					$result=mysqli_query($conexion,$sql);
					while($mostrar=mysqli_fetch_array($result)){
						$ci = $mostrar['ci'];
						$c2 = $mostrar['ci'].'bs';
						$sql2="SELECT * FROM usuario WHERE ci= $ci";
						$result2=mysqli_query($conexion,$sql2);
						$mostrar2=mysqli_fetch_array($result2);
						
						$mail = $mostrar2['email'];
						$nMail = "mailto:".$mail;
						$monto = $mostrar['costo'] * $mostrar['meses'] ;
						
				?>
						<tr>
							<td><?php echo $mostrar['nombreCompleto']?></td>
							<td><?php echo $mostrar['ci']?></td>
							<td> <input type="text" name="costo" id="<?php echo $c2 ?>"  value="<?php echo $mostrar['costo'] ?>"></td>
							<td> <input type="text" name="meses" id="<?php echo $ci ?>"  value="<?php echo $mostrar['meses'] ?>"></td>
							<td><?php echo $monto?></td>
							<td class="fech"><a class="botonG" onclick="guardar('<?php echo $ci; ?>');">Guardar</a></td>
							<td class="fech"><a class="botonN" href="<?php echo $nMail?>">Notificar</a></td>
		
							
						</tr>
				<?php
					}
				?>

			</table>





				<div class="boton">
					<button class="botonAceptar1" name ="botonAceptar1" onclick="location.href=''">Generar</button>
					<button class="botonCancelar" name ="botonCerrar" onclick="location.href='inicioAdmin.html'">Cancelar</button>

				</div>
			</div> 
		</div>
	</section>

	<script src ="https://code.jquery.com/jquery-3.6.0.min.js"></script>	
	<script src="js/facturar.js"></script>

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