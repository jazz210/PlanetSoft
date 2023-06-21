const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const validar = (e) =>{
		document.getElementById('error2').classList.add('mostrarError2');
		document.getElementById('error2').classList.remove('mostrarError2');	
}


inputs.forEach((input) => {
	input.addEventListener('keyup', validar);
	input.addEventListener('blur', validar);
});

formulario.addEventListener('submit',  function(e){
	e.preventDefault();
	var datos = new FormData(formulario);


	if(datos.get('mensaje')!=" "){
			console.log(datos.get('mensaje'))
			fetch('./php/reclamos.php',{
				method:'POST', 
				body: datos
				})
				.then( res => res.json())
				.then(data => {
					console.log(data)
					if(data === 'existe'){
						document.getElementById('error').classList.add('mostrarError');;

					}else if(data === 'correcto'){
				 		window.location.href = "reclamoEnviado.html";
						console.log("siii");
					}
			})
		
	}else{
		document.getElementById('error2').classList.add('mostrarError2');
	}

});