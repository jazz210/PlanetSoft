function pagar(carnet){

	var c 	=carnet;
	
   $(document).ready(function(){
   $.ajax(
   {
	url: './php/pagar.php',
	method: "POST",
	data:{
		id:c,
	}
   }).done(function(res){
		if(res === "correcto"){
				console.log("si")
			}else{
				console.log(res);
				window.location.href = "pagoRealizado.html";
			}
  	 });
	});
}



