const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');


formulario.addEventListener('submit', function(e){
	e.preventDefault();
	console.log('click')
	var datos = new FormData(formulario);
	if(datos.get('usuario')!="" && datos.get('contrasenia')!=""){
		fetch('./php/login.php',{
			method:'POST', 
			body: datos
			})
			.then( res => res.json())
			.then(data => {
				console.log(data)
				if(data === 'error'){
					document.getElementById('error').classList.add('mostrarError');

			}else if(data === 'correcto'){
				 	window.location.href = "inicio.html";
				}
			})
	}else{
		document.getElementById('error2').classList.add('mostrarError2');
	}

	
})
