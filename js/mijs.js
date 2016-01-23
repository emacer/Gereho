$(function(){
	$( "#dateDesde" ).datepicker();
	$( "#dateHasta" ).datepicker();

});

function reservar(){
	var nombre = $('#nombre')[0].value;
	var apellido = $('#apellido')[0].value;
	var email = $('#email')[0].value;
	var telefono = $('#telefono')[0].value;
	var cantidad = $('#cantidad')[0].value;
	var fdesde = $('#dateDesde')[0].value;
	var fhasta = $('#dateHasta')[0].value;
	var comentario = $('#comentario')[0].value;

	$.ajax({
		type: "POST", 
		//dataType: "json",
	    data: {"nombre": nombre, "apellido": apellido, "email":email, "telefono":telefono,
	    		"cantidad":cantidad, "fdesde":fdesde, "fhasta":fhasta, "comentario":comentario},
	    url: "reserva.php",
	    success: function(data){
	    	alert(data);
	    	limpiarCampos();
	    }
    }); 
}

function limpiarCampos(){
	var nombre = $('#nombre')[0].value = ""	;
	var apellido = $('#apellido')[0].value = ""	;
	var email = $('#email')[0].value = ""	;
	var telefono = $('#telefono')[0].value = ""	;
	var cantidad = $('#cantidad')[0].value = ""	;
	var fdesde = $('#dateDesde')[0].value = ""	;
	var fhasta = $('#dateHasta')[0].value = ""	;
	var comentario = $('#comentario')[0].value = ""	;
}