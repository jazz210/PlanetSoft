const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const validar = (e) =>{
	
		document.getElementById('error2').classList.add('mostrarError2');
		document.getElementById('error2').classList.remove('mostrarError2');
		
		document.getElementById('error').classList.add('mostrarError');
		document.getElementById('error').classList.remove('mostrarError');

			
}

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{4,35}$/,
	ci: /^\d{7,8}$/,
	celular: /^\d{8}$/,
	docente: /^[a-zA-Z0-9_.+-]+\@fcyt.umss.edu+\.bo$/,


}


const campos = {
	nombre: false,
	ci: false,
	celular: false,
	email: false,
	contrasenia: false,

	
}



const validarCampos = (e) =>{
	var leer = new FormData(formulario);
	switch(e.target.name){
		case "nombre":
			if(expresiones.nombre.test(e.target.value)){
				document.getElementById('errorInput').classList.remove('mostrarErrorInput');
				campos['nombre'] = true;
			}else{
				document.getElementById('errorInput').classList.add('mostrarErrorInput');	
				campos['nombre'] = false;
			}
		break;
		
		case "ci":
			if(expresiones.ci.test(e.target.value)){
				document.querySelector('#inputCi .errorInput').classList.remove('mostrarErrorInput');
				campos['ci'] = true;
			}else{
				document.querySelector('#inputCi .errorInput').classList.add('mostrarErrorInput');	
				campos['ci'] = false;
			}
		break;

		case "celular":
			if(expresiones.celular.test(e.target.value)){
				document.querySelector('#inputCelular .errorInput').classList.remove('mostrarErrorInput');
				campos['celular'] = true;
			}else{
				campos['celular'] = false;
				document.querySelector('#inputCelular .errorInput').classList.add('mostrarErrorInput');	
			}
		break;

		case "email":
			if(expresiones.docente.test(e.target.value)){
				document.querySelector('#inputEmail .errorInput').classList.remove('mostrarErrorInput');
				campos['email'] = true;
			}else{
				campos['email'] = false;
				document.querySelector('#inputEmail .errorInput').classList.add('mostrarErrorInput');	
			}
		break;



	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validar);
	input.addEventListener('blur', validar);

	input.addEventListener('keyup', validarCampos);
	input.addEventListener('blur', validarCampos);
});

formulario.addEventListener('submit',  function(e){
	e.preventDefault();
	var datos = new FormData(formulario);
	console.log(datos.get('nombre'))

	if(campos.nombre && campos.ci &&  campos.celular  && campos.email){
			var datos2 = new FormData(formulario);

			console.log(datos2)
			console.log(datos2.get('nombre'))
			fetch('./php/editar.php',{
				method:'POST', 
				body: datos
				})
				.then( res => res.json())
				.then(data => {
					console.log(data)
					if(data === 'existe'){
						document.getElementById('error').classList.add('mostrarError');;

					}else if(data === 'correcto'){
				 		window.location.href = "administrar.php";
						console.log("si");
					}
			})
		
	}else{
		document.getElementById('error2').classList.add('mostrarError2');
	}

});