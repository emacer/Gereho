function enviarForm() {
	str= $('#fdesde').val();
	str2= $('#fhasta').val();	
	if (str.length==0 || str2.length==0) {
		$.growl.warning({ message: "Fecha no puede estar en blanco" });	
		return;
	}		

    f1= str.split("/").reverse().join("-") + " 00:00:00";			
    f2= str2.split("/").reverse().join("-")+ " 23:00:00";	
    
    $.ajax({                                      
      url: 'leerEstad.php',                  //the script to call to get data          
        data: {fdesde: f1, fhasta: f2},     
		type: 'get',
        //data: {name: $('input#name').val()},
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
