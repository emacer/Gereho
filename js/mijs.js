$(function(){
	$( "#datepicker" ).datepicker();
});

function reservar(){
	var campos = $("input");
	for (var i=0; i < campos.length; i++){
		campos[i].value="";
	}
	var textarea = $("textarea")[0];
	textarea.value="";
	alert("gracias por confiar en nosotros!!");
}