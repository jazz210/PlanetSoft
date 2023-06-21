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
	<link rel="stylesheet" href="css/mapa.css">
 	

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
			<div class="titulo">Espacios disponibles</div>
			<div class="selectorMapa">
				<button class="botonAceptar2" name ="botonAceptar2" onclick="mostrarA();">Bloque A</button>
				<button class="botonAceptar2" name ="botonAceptar2" onclick="mostrarB();">Bloque B</button>
			</div>
			<div class="contenedor">
			<div class="mapaA" id="mapaA">
				<div class="info">
					<div class="titulo2">BloqueA</div>
					<div class="titulo5">Horario:</div>
					<div class="titulo3">Lun-Vier:</div>
					<div class="titulo4">6:45-21:45</div> 
					<div class="titulo3">Sab:</div>
					<div class="titulo4">6:45-12:45</div> 
				</div>
				<div class="mapa" id="mapa">
					
					
					<?php
						for($i=101;$i < 118; $i=$i + 1){
							$sql="SELECT * FROM parqueo WHERE codigo = $i";
							$result=mysqli_query($conexion,$sql);
							$mostrar=mysqli_fetch_array($result);
							if($mostrar['libre']=='si'){
								
					?>
								<div class="espacio"><?php echo $mostrar['numero']?></div>
					<?php
							}else{
								$n = $mostrar['nombre'];
								$p = $mostrar['placa'];
								$no = $mostrar['numero'];
								$b = $mostrar['bloque'];
								
					?>
								<div class="ocupado" onclick="mostrarDatos('<?php echo $n;?>', '<?php echo $p;?>', '<?php echo $no;?>', '<?php echo $b;?>');"><?php echo $mostrar['numero']?></div>
					<?php
							}
						}
					?>
					

					<?php
						for($i=1;$i < 18; $i=$i + 1){
					?>
							<div></div>
					<?php
						}
					?>


					<div></div>
					<div></div>
					<?php
						for($i=118;$i < 131; $i=$i + 1){
							$sql="SELECT * FROM parqueo WHERE codigo = $i";
							$result=mysqli_query($conexion,$sql);
							$mostrar=mysqli_fetch_array($result);
							if($mostrar['libre']=='si'){
					?>
								<div class="espacio"><?php echo $mostrar['numero']?></div>
					<?php
							}else{
								$n = $mostrar['nombre'];
								$p = $mostrar['placa'];
								$no = $mostrar['numero'];
								$b = $mostrar['bloque'];
					?>
								<div class="ocupado" onclick="mostrarDatos('<?php echo $n;?>', '<?php echo $p;?>', '<?php echo $no;?>', '<?php echo $b;?>');"><?php echo $mostrar['numero']?></div>
					<?php
							}
						}
					?>
					<div></div>
					<div></div>

					<div></div>
					<div></div>
					<?php
						for($i=131;$i < 144; $i=$i + 1){
							$sql="SELECT * FROM parqueo WHERE codigo = $i";
							$result=mysqli_query($conexion,$sql);
							$mostrar=mysqli_fetch_array($result);
							if($mostrar['libre']=='si'){
					?>
								<div class="espacio"><?php echo $mostrar['numero']?></div>
					<?php
							}else{
								$n = $mostrar['nombre'];
								$p = $mostrar['placa'];
								$no = $mostrar['numero'];
								$b = $mostrar['bloque'];
					?>
								<div class="ocupado" onclick="mostrarDatos('<?php echo $n;?>', '<?php echo $p;?>', '<?php echo $no;?>', '<?php echo $b;?>');"><?php echo $mostrar['numero']?></div>
					<?php
							}
						}
					?>
					<div></div>
					<div></div>

					<?php
						for($i=1;$i < 18; $i=$i + 1){
					?>
							<div></div>
					<?php
						}
					?>


					<?php
						for($i=144;$i < 161; $i=$i + 1){
							$sql="SELECT * FROM parqueo WHERE codigo = $i";
							$result=mysqli_query($conexion,$sql);
							$mostrar=mysqli_fetch_array($result);
							if($mostrar['libre']=='si'){
					?>
								<div class="espacio"><?php echo $mostrar['numero']?></div>
					<?php
							}else{
								$n = $mostrar['nombre'];
								$p = $mostrar['placa'];
								$no = $mostrar['numero'];
								$b = $mostrar['bloque'];
					?>
								<div class="ocupado" onclick="mostrarDatos('<?php echo $n;?>', '<?php echo $p;?>', '<?php echo $no;?>', '<?php echo $b;?>');"><?php echo $mostrar['numero']?></div>
					<?php
							}
						}
					?>
				</div>
				</div>

				<div class="mapaB" id="mapaB">

				<div class="info">
					<div class="titulo2">BloqueB</div>
					<div class="titulo5">Horario:</div>
					<div class="titulo3">Lun-Vier:</div>
					<div class="titulo4">6:45-21:45</div> 
					<div class="titulo3">Sab:</div>
					<div class="titulo4">6:45-12:45</div> 
				</div>
				<div class="mapaPequeño">
				<div class="mapa2" id="mapa2">
							

					<?php
						for($i=201;$i < 213; $i=$i + 1){
							$sql="SELECT * FROM parqueo WHERE codigo = $i";
							$result=mysqli_query($conexion,$sql);
							$mostrar=mysqli_fetch_array($result);
							if($mostrar['libre']=='si'){
					?>
								<div class="espacio"><?php echo $mostrar['numero']?></div>
					<?php
							}else{
								$n = $mostrar['nombre'];
								$p = $mostrar['placa'];
								$no = $mostrar['numero'];
								$b = $mostrar['bloque'];
					?>
								<div class="ocupado" onclick="mostrarDatos('<?php echo $n;?>', '<?php echo $p;?>', '<?php echo $no;?>', '<?php echo $b;?>');"><?php echo $mostrar['numero']?></div>
					<?php
							}
						}
					?>
					

					<?php
						for($i=1;$i < 13; $i=$i + 1){
					?>
							<div></div>
					<?php
						}
					?>


					<div></div>
					<div></div>
					<?php
						for($i=213;$i < 221; $i=$i + 1){
							$sql="SELECT * FROM parqueo WHERE codigo = $i";
							$result=mysqli_query($conexion,$sql);
							$mostrar=mysqli_fetch_array($result);
							if($mostrar['libre']=='si'){
					?>
								<div class="espacio"><?php echo $mostrar['numero']?></div>
					<?php
							}else{
								$n = $mostrar['nombre'];
								$p = $mostrar['placa'];
								$no = $mostrar['numero'];
								$b = $mostrar['bloque'];
							
					?>
								<div class="ocupado" onclick="mostrarDatos('<?php echo $n;?>', '<?php echo $p;?>', '<?php echo $no;?>', '<?php echo $b;?>');"><?php echo $mostrar['numero']?></div>
					<?php
							}
						}
					?>
					<div></div>
					<div></div>

					<div></div>
					<div></div>
					<?php
						for($i=221;$i < 229; $i=$i + 1){
							$sql="SELECT * FROM parqueo WHERE codigo = $i";
							$result=mysqli_query($conexion,$sql);
							$mostrar=mysqli_fetch_array($result);
							if($mostrar['libre']=='si'){
					?>
								<div class="espacio"><?php echo $mostrar['numero']?></div>
					<?php
							}else{
								$n = $mostrar['nombre'];
								$p = $mostrar['placa'];
								$no = $mostrar['numero'];
								$b = $mostrar['bloque'];
					?>
								<div class="ocupado" onclick="mostrarDatos('<?php echo $n;?>', '<?php echo $p;?>', '<?php echo $no;?>', '<?php echo $b;?>');"><?php echo $mostrar['numero']?></div>
					<?php
							}
						}
					?>
					<div></div>
					<div></div>

					<?php
						for($i=1;$i < 13; $i=$i + 1){
					?>
							<div></div>
					<?php
						}
					?>


					<?php
						for($i=229;$i < 241; $i=$i + 1){
							$sql="SELECT * FROM parqueo WHERE codigo = $i";
							$result=mysqli_query($conexion,$sql);
							$mostrar=mysqli_fetch_array($result);
							if($mostrar['libre']=='si'){
					?>
								<div class="espacio"><?php echo $mostrar['numero']?></div>
					<?php
							}else{
								$n = $mostrar['nombre'];
								$p = $mostrar['placa'];
								$no = $mostrar['numero'];
								$b = $mostrar['bloque'];
					?>
								<div class="ocupado" onclick="mostrarDatos('<?php echo $n;?>', '<?php echo $p;?>', '<?php echo $no;?>', '<?php echo $b;?>');"><?php echo $mostrar['numero']?></div>
					<?php
							}
						}
					?>
				</div>
				</div>
				</div>
				<div class="informacion">
					<div class="cajaLista">
					<div class="boton">
						<button class="botonAceptar" name ="botonAceptar" onclick="location.href='mapa.php'">Actualizar</button>
					</div>


					<table id="tablaTecnica">
						<tr>
							<th>Espacio</th>
							<th>Bloque</th>
						</tr>

						<?php
							$sql="SELECT * FROM parqueo WHERE libre = 'si'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_array($result)){
						?>
							<tr>
								<td class="fech"><?php echo $mostrar['numero']?></td>
								<td class="fech"><?php echo $mostrar['bloque']?></td>
						<?php
							}
						?>

					</table>
				</div>

				<div class="datos">
					<div class="txtDatos">Numero: </div>
					<div class="txtDatos">Bloque: </div>
					<div class="txtDatos">Nombre: </div>
					<div class="txtDatos">Placa: </div>
					<button class="botonQuitar" name ="botonQuitar" onclick="">Quitar</button>
				</div>
				</div>
			</div>
		
			
			<button class="botonAceptar2" name ="botonAceptar" onclick="location.href='solicitud.php'">Volver</button>
		</div>
	</section>
	<script src ="https://code.jquery.com/jquery-3.6.0.min.js"></script>	
	<script src="js/mapa.js"></script>
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