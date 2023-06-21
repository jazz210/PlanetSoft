const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const validar = (e) =>{
		document.getElementById('error3').classList.add('mostrarError3');
		document.getElementById('error3').classList.remove('mostrarError3');
	
		document.getElementById('error2').classList.add('mostrarError2');
		document.getElementById('error2').classList.remove('mostrarError2');
		
		document.getElementById('error').classList.add('mostrarError');
		document.getElementById('error').classList.remove('mostrarError');

			
}

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{4,35}$/,
	ci: /^\d{7,8}$/,
	celular: /^\d{8}$/,
	//gmail: /^[a-zA-Z0-9_.+-]+\@gmail+\.com$/,
	//hotmail: /^[a-zA-Z0-9_.+-]+\@hotmail+\.com$/,
	//academi: /^[a-zA-Z0-9_.+-]+\@est.umss+\.edu$/,
	docente: /^[a-zA-Z0-9_.+-]+\@fcyt.umss.edu+\.bo$/,
	//contrasenia: /^.{8,20}$/,
	contrasenia2: /^[A-Z]{1,20}$/,

}


const campos = {
	nombre: false,
	ci: false,
	celular: false,
	email: false,
	contrasenia: false,

	
}


function buscarMayuscula(contra){
	var c ='';
	var i=0;
	var n=0;
	console.log(contra.charAt(0));
	for(i=0;i<contra.length;i++){
		c=contra.charAt(i);
		console.log(contra.charAt(i));
		if (!isNaN(c * 1)){ 
		
		}else{
		if (c==c.toUpperCase()){ 
			console.log(contra.charAt(i));
			n=n+1;
		}
		}
	}
	if(n>=1 && contra.length >= 8 && contra.length <= 20 ){
		return true;
	}else{
		return false;
	}

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


		
		case "contrasenia":
			console.log(leer.get('contrasenia'));
			if(buscarMayuscula(leer.get('contrasenia'))){
				console.log("aqui");
				document.querySelector('#inputContrasenia .errorInput').classList.remove('mostrarErrorInput');
				campos['contrasenia'] = true;
			}else{
				console.log("aquino");
				campos['contrasenia'] = false;
				document.querySelector('#inputContrasenia .errorInput').classList.add('mostrarErrorInput');	
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


	if(campos.nombre && campos.ci &&  campos.celular  && campos.email && campos.contrasenia){
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