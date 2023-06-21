const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const inp = document.querySelectorAll('#formulario textarea');

function elegir(espacio, bloque){
	var numero	=espacio;
	var bloq 	=bloque;
	document.getElementById('espacio').value = numero;
	document.getElementById('bloque').value = bloq;
		
}

const validar = (e) =>{

		document.getElementById('error2').classList.add('mostrarError2');
		document.getElementById('error2').classList.remove('mostrarError2');

		document.getElementById('error').classList.add('mostrarError');
		document.getElementById('error').classList.remove('mostrarError');

		switch(e.target.name){
			case "ci":
				console.log("ci");
				console.log(document.getElementById('nombre'));
				const valor = document.getElementById('nombre');
				


						var dato = new FormData(formulario);
						fetch('./php/leerCi.php',{
							method:'POST', 
							body: dato
							})
							.then( res => res.json())
							.then(data => {
								if(data != 'no hay'){
									valor.value = data;
								}else if(data === 'no hay'){
									valor.value = "No Encontrado"; 
								}
					})

			break;
		}	
				
}


inputs.forEach((input) => {
	input.addEventListener('keyup', validar);
	input.addEventListener('blur', validar);
});

inp.forEach((textarea) => {
	textarea.addEventListener('keyup', validar);
	textarea.addEventListener('blur', validar);
});

formulario.addEventListener('submit',  function(e){
	e.preventDefault();
	var datos = new FormData(formulario);


	if(datos.get('nombre')!="" && datos.get('ci')!="" && datos.get('placa')!=""){
		if(datos.get('nombre')!="No Encontrado"){
			var datos2 = new FormData(formulario);
			fetch('./php/reserva.php',{
				method:'POST', 
				body: datos
				})
				.then( res => res.json())
				.then(data => {
					console.log(data)
					if(data === 'error'){
						console.log("error")
					}else if(data === 'correcto'){
				 		window.location.href = "solicitudEnviada.html";
					}
			})
		
		}else{	
			document.getElementById('error').classList.add('mostrarError');
		}
	}else{
		document.getElementById('error2').classList.add('mostrarError2');
	}

});