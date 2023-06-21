 function guardar(ci){
	var c3 = ci+"bs";
	var mes=document.getElementById(ci).value; 
	var costo=document.getElementById(c3).value; 
	console.log(mes);
	console.log(ci);

  $(document).ready(function(){
   $.ajax(
   {
	url: './php/facturar.php',
	method: "POST",
	data:{
		id:mes,
		c:ci,
		bs:costo,
	}
   }).done(function(res){
		if(res === "correcto"){
				console.log("si")
			}else{
				console.log(res);
				window.location.href = "reportes.php";
			}
  	 });
	});
}