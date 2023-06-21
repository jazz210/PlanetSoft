function asignar(placa, espacio, bloque, nombre, ci){

	var p 	=placa;
	var n	=espacio;
	var b	=bloque;
	var c	=ci;
	var nom	=nombre;

	
   $(document).ready(function(){
   $.ajax(
   {
	url: './php/asignar.php',
	method: "POST",
	data:{
		id:p,
		numero:n,
		blo:b,
		carnet:c,
		no:nom,
	}
   }).done(function(res){
		if(res === "correcto"){
				console.log("si")
			}else{
				console.log(res);
				window.location.href = "solicitudAceptada.html";
			}
  	 });
	});
}


function borrar(placa){

	var p 	=placa;

	
   $(document).ready(function(){
   $.ajax(
   {
	url: './php/borrar.php',
	method: "POST",
	data:{
		id:p,
	}
   }).done(function(res){
		if(res === "correcto"){
				console.log("si")
			}else{
				console.log(res);
				window.location.href = "solicitud.php";
			}
  	 });
	});
}

