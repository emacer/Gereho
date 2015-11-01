function enviarForm(skip) {
	str= $('#fdesde').val();
	str2= $('#fhasta').val();
	filtro= $('#filter').val();
	if (str.length==0 || str2.length==0) {
		$.growl.warning({ message: "Fecha no puede estar en blanco" });	
		return;
	}		

    f1= str.split("/").reverse().join("-") + " 00:00:00";			
    f2= str2.split("/").reverse().join("-")+ " 23:00:00";	
    
	pol=0;
	if( $('#chkpos').is(':checked')==false &&  $('#chkneg').is(':checked')==false ) {
		$.growl.warning({ message: "No ha seleccionado polaridad" });	
		return;
	}		
    
	if( $('#chkpos').is(':checked')==true &&  $('#chkneg').is(':checked')==false ) {
		pol=1;
	}

	if( $('#chkpos').is(':checked')==false &&  $('#chkneg').is(':checked')==true ) {
		pol=2;
	}
	    
	if( $('#chkpos').is(':checked')==true &&  $('#chkneg').is(':checked')==true ) {
		pol=3;
	}

	var base = skip || 0;
	    
    $.ajax({                                      
      	url: 'leerOpn.php',                  //the script to call to get data          
      	//data: "",                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
		type: 'get',
        data: {fdesde: f1, fhasta: f2, polaridad: pol, filtro:filtro, inferior: base},
        success: function(response) {
            $('#output').html(response);
        },	    
        error: function() {
			alert("result is not OK");
		},
    });
}

$(document).ready(function () {
    $("#fdesde").datepicker({
        firstDay: 1
    });

    $("input#fhasta").datepicker({
        firstDay: 1
    });
});