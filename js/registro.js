const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

formulario.addEventListener('submit',  function(e){
	e.preventDefault();
	var datos = new FormData(formulario);


	if(datos.get('nombre')!="" && datos.get('ci')!="" &&  datos.get('celular')!=""  &&  datos.get('email')!=""  &&  datos.get('contrasenia')!="" ){
		if(datos.get('contrasenia') == datos.get('contrasenia2')){
			var datos2 = new FormData(formulario);

			console.log(datos2)
			console.log(datos2.get('nombre'))
			fetch('./php/registro.php',{
				method:'POST', 
				body: datos
				})
				.then( res => res.json())
				.then(data => {
					console.log(data)
					if(data === 'existe'){
						document.getElementById('error').classList.add('mostrarError');;

					}else if(data === 'correcto'){
				 		window.location.href = "registroCorrecto.html";
						console.log("siiiyos");
					}
			})
		
		}else{
			document.getElementById('error3').classList.add('mostrarError3');
		}
		
	}else{
		document.getElementById('error2').classList.add('mostrarError2');
	}

});