function enviarForm(){
	var opinion = $("#op")[0].value;
	if (opinion.length==0) return;

	$.ajax({
		type: "POST", 
		dataType: "json",
	    data: {"opinion": opinion},
	    url: "http://".concat(app.datos.ip,":",app.datos.puerto,"/clasificar"),
	    crossDomain:true,
	    datatype:"script",
	    success: function(data){
	    	$("div.modal-body").html(data.result.replace(/\n/g, "<div class='row'></div>"));
	    	$("#myModalcla").modal("show");
	    },
	    error: function() {
	    	alert("result is not OK");
			},
    }); 
}

function corregirData(){
	var opinion = $("#op")[0].value;
	if (opinion.length==0) return;
	$.ajax({
		type: "POST", 
		dataType: "json",
	    data: {"opinion": opinion},
	    url: "http://".concat(app.datos.ip,":",app.datos.puerto,"/corrector"),
	    crossDomain:true,
	    datatype:"script",
	    success: function(data){
	    	$("#myModalcla").modal("hide");
	    	$("div.modal-body").html(data.result.replace(/\n/g, "<div class='row'></div>"));
	    	$("#myModalSinCor").modal("show");
	    },
	    error: function() {
	    	alert("result is not OK");
			},
    }); 
}

function sinCorregirOpinion() {
	var opinion = $("#op")[0].value;
	$.ajax({
		type: "POST", 
		dataType: "json",
	    data: {"opinion": opinion,"cambiar": 0},
	    url: "http://".concat(app.datos.ip,":",app.datos.puerto,"/guardarOpinion"),
	    crossDomain:true,
	    datatype:"script",
	    success: function(data){
	    	$("#myModalcla").modal("hide");
	    	$("div.modal-body").html(data.result.replace(/\n/g, "<div class='row'></div>"));
	    	$("#op").val("");
	    	$("#myModalSinCor").modal("show");
	    },
	    error: function() {
	    	alert("result is not OK");
			},
    }); 
}

function corregirOpinion() {

	var opinion = $("#op")[0].value;
	$.ajax({
		type: "POST", 
		dataType: "json",
	    data: {"opinion": opinion, "cambiar": 1},
	    url: "http://".concat(app.datos.ip,":",app.datos.puerto,"/guardarOpinion"),
	    crossDomain:true,
	    datatype:"script",
	    success: function(data){
	    	$("#myModalcla").modal("hide");
	    	$("div.modal-body").html(data.result.replace(/\n/g, "<div class='row'></div>"));
	    	$("#myModalCor").modal("show");
	    },
	    error: function() {
	    	alert("result is not OK");
			},
    }); 
}

