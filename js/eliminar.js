
function borrar(mail){

	var coreo	=mail;

	
   $(document).ready(function(){
   $.ajax(
   {
	url: './php/eliminar.php',
	method: "POST",
	data:{
		id:coreo,
	}
   }).done(function(res){
		if(res === "correcto"){
				console.log("si")
			}else{
				console.log(res);
				window.location.href = "administrar.php";
			}
  	 });
	});
}

