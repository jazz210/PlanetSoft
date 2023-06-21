const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');


const validar = (e) =>{


	
		document.getElementById('error2').classList.add('mostrarError2');
		document.getElementById('error2').classList.remove('mostrarError2');
		
		document.getElementById('error').classList.add('mostrarError');
		document.getElementById('error').classList.remove('mostrarError');

			
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validar);
	input.addEventListener('blur', validar);
});

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

				}else if(data === 'usuario'){
				 	window.location.href = "inicio.html";
					}else if(data == 'admin'){
						window.location.href = "inicioAdmin.html";
					}
			})
	}else{
		document.getElementById('error2').classList.add('mostrarError2');
	}

	
})
