function mostrarDatos(nombre, placa, numero, bloque){   
	var n = nombre; 
	var p = placa; 
	var no= numero;
	var b = bloque;
	if(no<10){
		var no= "0"+no;
	}
	var c = b+""+no; 
	var texto2 = "<button class=\"botonAceptar2\" name =\"botonAceptar\" onclick=\"location.href=\'solicitud.php\'\">Volver</button>";
	var texto = " <h4>Numero: " + no + "</h4> <h4>Bloque: " + b + "</h4> <h4>Nombre: " + n + "</h4> <h4>Placa: " + p + "</h4> <button class=\"botonQuitar\" name =\"botonQuitar\" onclick=\"desocupar('"+c+"');\">Quitar</button>";

	var mensaje = document.querySelector(".datos")
       	mensaje.innerHTML = texto;
			
}


function mostrarInfo(nombre, placa, numero, bloque){   
	var n = nombre; 
	var p = placa; 
	var no= numero;
	var b = bloque;
	if(no<10){
		var no= "0"+no;
	}
	var c = b+""+no; 

	var texto = "<div class=\"txtDatosEspacio\"></div> <h4>Numero: " + no + "</h4> <h4>Bloque: " + b + "</h4> <h4>Nombre: " + n + "</h4> <h4>Placa: " + p + "</h4>";

	var mensaje = document.querySelector(".datos")
       	mensaje.innerHTML = texto;
			
}

function mostrarA(){
	document.getElementById('mapaA').classList.remove('mostrarMapa');
	document.getElementById('mapaB').classList.remove('mostrarMapa2');
		
}

function mostrarB(){
	document.getElementById('mapaB').classList.add('mostrarMapa2');
	document.getElementById('mapaA').classList.add('mostrarMapa');
		
}

function desocupar(placa){
	var p 	=placa;

	
   $(document).ready(function(){
   $.ajax(
   {
	url: './php/eliminarParqueo.php',
	method: "POST",
	data:{
		id:p,
	}
   }).done(function(res){
	if(res === "correcto"){
				console.log("si")
			}else{
				console.log(res);
				window.location.href = "mapa.php";
			}
  	 });
	});
}